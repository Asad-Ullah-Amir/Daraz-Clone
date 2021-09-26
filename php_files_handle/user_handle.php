<?php
require "../config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $f_name = htmlentities($_POST['user_fname']);
        $l_name = htmlentities($_POST['user_lname']);
        $email = htmlentities($_POST['user_email']);
        $user_phone = htmlentities($_POST['user_phone']);
        $user_password = htmlentities($_POST['user_password']);
        $user_c_password = htmlentities($_POST['user_c_password']);
        $obj = new Database();
        $obj->Select('user', '*', null, "username='$email'");
        $res = $obj->show_output();
        if (!empty($res[0])) {
            echo json_encode(array('message' => 'User Already Exists!'));
        } else {
            if ($user_password === $user_c_password) {
                $pass = password_hash($user_password, PASSWORD_DEFAULT);
                $obj->Insert('user', array('f_name' => $f_name, 'l_name' => $l_name, 'username' => $email, 'password' => $pass, 'mobile' => $user_phone));
                $insert_res = $obj->show_output();
                if (is_numeric($insert_res[0])) {

                    echo json_encode(array('message' => 'Resigtered Successfully!', 'status' => true));
                } else {
                    echo json_encode(array('message' => $insert_res[0], 'status' => false));
                }
            } else {
                echo json_encode(array('message' => 'Passwords not matching!', 'status' => false));
            }
        }
    }





    // Login handle 
    if (isset($_POST['login'])) {
        $login_email = htmlentities($_POST['login_email']);
        $login_pass = htmlentities($_POST['login_password']);

        $obj = new Database();
        $obj->Select('user', '*', null, "username='$login_email'");
        $res = $obj->show_output();
        if (count($res[0]) == 1) {
            if ($res[0][0]['user_role'] == '1') {
                if (password_verify($login_pass, $res[0][0]['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $res[0][0]['user_id'];
                    $_SESSION['name'] = $res[0][0]['f_name'];
                    $_SESSION['username'] = $res[0][0]['username'];
                    $_SESSION['user_role'] = 'user';
                    echo json_encode(array('message' => "You are login now!", 'status' => true));
                } else {
                    echo json_encode(array('message' => "password not matched", 'status' => false));
                }
            } else {
                echo json_encode(array('message' => "This username is blocked due to some security reasons!", 'status' => false));
            }
        } else {
            echo json_encode(array('message' => 'User with this name doesn\'t exists', 'status' => false));
        }
    }
}








// Add Cart hanlde 
if (isset($_POST['cart_product_id'])) {
    session_start();
    $id = $_POST['cart_product_id'];
    if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
        $obj1 = new Database();
        $obj1->Select('add_cart', '*', null, "user_id={$_SESSION['user_id']} AND product_id=$id");
        $res = $obj1->show_output();
        if (count($res[0]) >= 1) {
            echo json_encode(array('message' => 'cart already exists', 'status' => null));
        } else {

            $obj = new Database();
            $obj->Insert('add_cart', array('user_id' => $_SESSION['user_id'], 'product_id' => $id));
            $result = $obj->show_output();
            if (is_numeric($result[0])) {
                echo json_encode(array('message' => 'OK!', 'status' => true));
            } else {
                echo json_encode(array('message' => $result[0], 'status' => null));
            }
        }
    } else {
        echo json_encode(array('message' => 'NO logged in', 'status' => false));
    }
}



// Delete Cart handle 
if(isset($_POST['delete_cart'])){
    $id = $_POST['delete_cart'];
    $obj = new Database();
    $obj->Delete('add_cart',"product_id=$id");
    $result = $obj->show_output();
    if(is_numeric($result[0])){
        echo json_encode(array('message' => 'deleted!', 'status' => true));
    }
    else{
        echo json_encode(array('message' => $result[0], 'status' => false));
    }
}




// Wishlist Handle 
if(isset($_POST['wishlist_id'])){
    session_start();
    $id = $_POST['wishlist_id'];
    if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
        $obj1 = new Database();
        $obj1->Select('whish_list', '*', null, "user_id={$_SESSION['user_id']} AND product_id=$id");
        $res = $obj1->show_output();
        if (count($res[0]) >= 1) {
            echo json_encode(array('message' => 'wish already exists', 'status' => null));
        } else {

            $obj = new Database();
            $obj->Insert('whish_list', array('user_id' => $_SESSION['user_id'], 'product_id' => $id));
            $result = $obj->show_output();
            if (is_numeric($result[0])) {
                echo json_encode(array('message' => 'OK!', 'status' => true));
            } else {
                echo json_encode(array('message' => $result[0], 'status' => null));
            }
        }
    } else {
        echo json_encode(array('message' => 'NO logged in', 'status' => false));
    }

}




// Delete wish handle 
if(isset($_POST['delete_wish'])){
    $id = $_POST['delete_wish'];
    $obj = new Database();
    $obj->Delete('whish_list',"product_id=$id");
    $result = $obj->show_output();
    if(is_numeric($result[0])){
        echo json_encode(array('message' => 'deleted!', 'status' => true));
    }
    else{
        echo json_encode(array('message' => $result[0], 'status' => false));
    }
}






// Load More 
if(isset($_POST['offset'])){
    $offset = $_POST['offset'];
    $limit = $_POST['limit'];
    if(isset($_POST['cat_id'])){
        // echo json_encode(array('offset'=>$offset,'limit'=>$limit,'cat_id'=>$cat_id));
        $cat_id = $_POST['cat_id'];
        $obj = new Database();
        $obj->select_query("SELECT * FROM `products` WHERE product_cat=$cat_id LIMIT $offset,$limit");
        $result = $obj->show_output();
        if(count($result[0]) > 0){
            // echo json_encode(array('message'=>$result[0]));
            $str = "";
            foreach ($result[0] as $value) {
                $str .= " <div class='col-lg-2 col-sm-3 col-4 p-0 parent_hover'>
                <div class='card mx-2'>
                    <a href='product.php?product_id={$value['product_id']}'><img src='./Admin/uploads/".$value['featured_image']."' class='card-img-top'></a>
                    <div class='card-body'>
                        <p class='card-title'>
                            <a href='product.php?product_id={$value['product_id']}' style='text-decoration:none; color:black;'>
                             ".substr($value['product_title'],0,50)."
                            </a>
                        </p>
                        <p class='card-text' style='color:#C58206;'>
                            Rs.{$value['product_price']}
                        </p>
                    </div>
                </div>
                <div class='child_hover'>
                    <div class='center d-flex justify-content-center'>
                        <div>
                            <a href='javascript:void(0)' class='add_whishlist' data-id='{$value['product_id']}'><i class='fas fa-heart custom_icon'></i></a>
                        </div>
                        <div>
                            <a href='javascript:void(0)' class='add_cart' data-id='{$value['product_id']}'><i class='fas fa-cart-plus custom_icon'></i></a>
                        </div>
                    </div>
                </div>
            </div>";
            }
            echo json_encode(array('message'=>$str));
        }else{
            echo json_encode(array('message'=>''));
        }
        
    }
    elseif(isset($_POST['subcat_id'])){
        // echo json_encode(array('offset'=>$offset,'limit'=>$limit,'cat_id'=>$subcat_id));
        $subcat_id = $_POST['subcat_id'];
        $obj = new Database();
        $obj->select_query("SELECT * FROM `products` WHERE product_sub_cat=$subcat_id LIMIT $offset,$limit");
        $result = $obj->show_output();
        if(count($result[0]) > 0){
            // echo json_encode(array('message'=>$result[0]));
            $str = "";
            foreach ($result[0] as $value) {
                $str .= " <div class='col-lg-2 col-sm-3 col-4 p-0 parent_hover'>
                <div class='card mx-2'>
                    <a href='product.php?product_id={$value['product_id']}'><img src='./Admin/uploads/{$value['featured_image']}' class='card-img-top'></a>
                    <div class='card-body'>
                        <p class='card-title'>
                            <a href='product.php?product_id={$value['product_id']}' style='text-decoration:none; color:black;'>
                             ".substr($value['product_title'],0,50)."
                            </a>
                        </p>
                        <p class='card-text' style='color:#C58206;'>
                            Rs.{$value['product_price']}
                        </p>
                    </div>
                </div>
                <div class='child_hover'>
                    <div class='center d-flex justify-content-center'>
                        <div>
                            <a href='javascript:void(0)' class='add_whishlist' data-id='{$value['product_id']}'><i class='fas fa-heart custom_icon'></i></a>
                        </div>
                        <div>
                            <a href='javascript:void(0)' class='add_cart' data-id='{$value['product_id']}'><i class='fas fa-cart-plus custom_icon'></i></a>
                        </div>
                    </div>
                </div>
            </div>";
            }
            echo json_encode(array('message'=>$str));
        }else{
            echo json_encode(array('message'=>''));
        }
    }
}



?>