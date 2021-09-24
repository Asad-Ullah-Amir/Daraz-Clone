<?php
include "../../config.php";
if(isset($_POST['admin'])){
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $obj = new Database();
    $obj->Select('admin','*',null,"username='$username'");
    $res = $obj->show_output();
    if(count($res[0]) == 1){
        if(password_verify($password,$res[0][0]['password'])){
            session_start();
            $_SESSION['admin'] = $res[0][0]['username'];
            $_SESSION['admin_id'] = $res[0][0]['admin_id'];
            echo json_encode(array('message'=>'Login Successful!','status'=>true));
            
        }
        else{
            
            echo json_encode(array('message'=>'password not veri','status'=>false));
        }
    }
    else{
        echo json_encode(array('message'=>'Username is incorrect!'));
    }
}





// Password Change handle 
if(isset($_POST['change_admin_pass'])){
    if(!empty($_POST['old_pass'])){ $old_pass = $_POST['old_pass']; } else { echo json_encode(array('message'=>'Password empty!','status'=>false)); exit; }
    if(!empty($_POST['new_pass'])){ $new_pass = $_POST['new_pass']; } else { echo json_encode(array('message'=>'Password empty!','status'=>false)); exit; }
    $id = $_POST['ad_id'];
    $obj = new Database();
    $obj->Select('admin','*');
    $res = $obj->show_output();
    if(password_verify($old_pass,$res[0][0]['password'])){
        $pass = password_hash($new_pass,PASSWORD_DEFAULT);
        $obj1 = new Database();
        $obj1->Update('admin',array('password'=>$pass),"admin_id=$id");
        $result = $obj1->show_output();
        if(is_numeric($result[0])){
            echo json_encode(array('message'=>'Password successfully Changed!','status'=>true));
        }
        else{
            echo json_encode(array('message'=>'Something went wrong!','status'=>false));
        }
    }
    else{
        echo json_encode(array('message'=>'Old password is wrong','status'=>false));
    }
}


?>