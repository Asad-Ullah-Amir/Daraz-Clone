<?php
// Database connection and queries handle class
class Database
{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'daraz-clone';
    private $conn = null;
    private $conn_check = false;
    private $result = array();

    function __construct()
    {
        if (!$this->conn_check) {

            $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if ($this->conn->connect_error) {
                die('Connection failed!' . $this->conn->connect_error);
            } else {
                $this->conn_check = true;
            }
        }
    }


    // INSERT METHOD 
    public function Insert($tableName, $params = array())
    {
        if ($this->table_check($tableName)) {
            $keys = implode("`, `", array_keys($params));
            $values = implode("', '", $params);
            $sql = "INSERT INTO `$tableName`(`$keys`) VALUES ('$values')";
            $res = $this->conn->query($sql);
            if ($res) {
                array_push($this->result, $this->conn->insert_id);
            } else {
                array_push($this->result,"Some error" . $this->conn->error);
            }
        } else {
            array_push($this->result,"Table doesn't exists");
        }
    }

    // UPDATE METHOD 
    public function Update($tableName, $params = array(), $where = null)
    {
        if ($this->table_check($tableName)) {
            $agrs = array();
            if ($where != null) {
                foreach ($params as $key => $value) {
                    $agrs[] = "$key = '$value'";
                }
                $sql = "UPDATE `$tableName` SET " . implode(',', $agrs) . " WHERE $where";
                $update_res = $this->conn->query($sql);
                if ($update_res) {
                    array_push($this->result, $this->conn->affected_rows);
                } else {
                    array_push($this->result, $this->conn->error);
                }
            } else {
                array_push($result, 'Query Failed!. Check and try again.');
            }
        } else {
            array_push($this->result, 'Table doesn\'t exist!');
        }
    }


    // DELETE METHOD 
    public function Delete($tableName, $where = null)
    {
        if ($this->table_check($tableName)) {
            if ($where != null) {
                $sql = "DELETE FROM `$tableName` WHERE $where";
                $del_res = $this->conn->query($sql);
                if ($del_res) {
                    array_push($this->result, $this->conn->affected_rows);
                } else {
                    array_push($this->result, $this->conn->error);
                }
            } else {
                array_push($this->result, $this->conn->error);
            }
        } else {
            array_push($this->result, "Table doesn't exist!");
        }
    }

    // SELECT METHODS 
    public function select_query($sql)
    {
        $sel_query_res = $this->conn->query($sql);
        if (!$sel_query_res) {
            array_push($this->result, $this->conn->error);
        } else {
            $query_result = $sel_query_res->fetch_all(MYSQLI_ASSOC);
            array_push($this->result, $query_result);
        }
    }

    public function Select($tableName, $rows = "*", $join = null, $where = null, $order_by = null, $limit = null)
    {
        if ($this->table_check($tableName)) {
            $sql = "SELECT $rows FROM `$tableName`";
            if ($join != null) {
                $sql .= " LEFT JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($order_by != null) {
                $sql .= " ORDER BY $order_by";
            }
            if ($limit != null) {
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;
                $sql .= " LIMIT $offset,$limit";
            }
            $select_res = $this->conn->query($sql);
            if (!$select_res) {
                array_push($this->result, $this->conn->error);
            } else {
                $query_result = $select_res->fetch_all(MYSQLI_ASSOC);
                array_push($this->result, $query_result);
            }
        }
        else{
            array_push($this->result,"Table doesn't exists!");
        }
    }

    public function pagination($tableName, $join = null, $where = null, $limit = null)
    {
        if ($this->table_check($tableName)) {
            if ($limit != null) {
                $sql = "SELECT COUNT(*) FROM `$tableName`";
                if ($join != null) {
                    $sql .= " JOIN $join";
                }
                if ($where != null) {
                    $sql .= " WHERE $where";
                }
                $pagination_res = $this->conn->query($sql);
                if (!$pagination_res) {
                    echo "Error " . $this->conn->error;
                } else {
                    $total_record = $pagination_res->fetch_array();
                    $total_record = $total_record[0];

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $url = basename($_SERVER['PHP_SELF']);
                    if ($total_record <= $limit) {
                        return false;
                    } else {
                        $total_pages = ceil($total_record / $limit);
                        $output = "<ul class='pagination'>";
                        if ($page > 1) {
                            $output .= "<li class='page-item'><a class='page-link' href=" . "$url?page=" . ($page - 1) . ">Prev <div class='hover_bubble'></div></a></li>";
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            $output .= "<li class='page-item'><a class='page-link' href=" . "$url?page=$i" . ">$i <div class='hover_bubble'></div></a></li>";
                        }
                        if ($total_pages > $page) {
                            $output .= "<li class='page-item'><a class='page-link' href=" . "$url?page=" . ($page + 1) . ">Next <div class='hover_bubble'></div></a></li>";
                        }
                        $output .= "</ul>";
                        return $output;
                    }
                }
            } else {
                echo "Please set limit!";
            }
        } else {
            echo "Table doesn't exist!";
        }
    }


    // Utilities

    public function table_check($tableName)
    {
        $sql = "SHOW TABLES FROM `{$this->db_name}` LIKE '$tableName'";
        $rows_num = $this->conn->query($sql);
        if ($rows_num) {
            if ($rows_num->num_rows == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function show_output()
    {
        $info = $this->result;
        $this->result = array();
        return $info;
    }


    function __destruct()
    {
        if ($this->conn_check) {
            if ($this->conn->close()) {
                $this->conn_check = false;
            } else {
                echo "Error";
            }
        }
    }
}



?>