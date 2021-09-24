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
                $pass = password_hash($user_password,PASSWORD_DEFAULT);
                $obj->Insert('user', array('f_name' => $f_name, 'l_name' => $l_name, 'username' => $email, 'password' => $pass,'mobile'=>$user_phone));
                $insert_res = $obj->show_output();
                if (is_numeric($insert_res[0])) {
                   
                    echo json_encode(array('message'=>'Resigtered Successfully!','status'=>true));
                } else {
                    echo json_encode(array('message' => $insert_res[0],'status'=>false));
                }
            }
            else{
                echo json_encode(array('message'=>'Passwords not matching!','status'=>false));
            }
        }
    }





    // Login handle 
    if(isset($_POST['login'])){
        $login_email = htmlentities($_POST['login_email']);
        $login_pass = htmlentities($_POST['login_password']);

        $obj = new Database();
        $obj->Select('user','*',null,"username='$login_email'");
        $res = $obj->show_output();
        if(count($res[0]) == 1){
            if($res[0][0]['user_role']=='1'){
                if(password_verify($login_pass,$res[0][0]['password'])){
                    session_start();
                    $_SESSION['user_id'] = $res[0][0]['user_id'];
                    $_SESSION['name'] = $res[0][0]['f_name'];
                    $_SESSION['username'] = $res[0][0]['username'];
                    $_SESSION['user_role'] = 'user';                
                    echo json_encode(array('message'=>"You are login now!",'status'=>true));
                }
                else{
                    echo json_encode(array('message'=>"password not matched",'status'=>false));
                }
            }
            else{
                echo json_encode(array('message'=>"This username is blocked due to some security reasons!",'status'=>false));
            }
        }
        else{
            echo json_encode(array('message'=>'User with this name doesn\'t exists','status'=>false));
        }
    }
}



?>