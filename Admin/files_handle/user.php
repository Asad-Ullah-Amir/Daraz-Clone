<?php 
include "../../config.php";

if(isset($_POST['user_id'])){
    $id = $_POST['user_id'];
    $obj = new Database();
    $obj->Select('user','*',null,"user_id=$id");
    $result = $obj->show_output();

    echo json_encode(array('message'=>$result[0][0]));
}




if(isset($_POST['user_block_id'])){
    $id = $_POST['user_block_id'];
    $obj = new Database();
    $obj->Select('user','*',null,"user_id=$id");
    $result = $obj->show_output();
    if($result[0][0]['user_role'] == '1'){
        $obj1 = new Database();
        $obj1->Update('user',array('user_role'=>'0'),"user_id=$id");
        $res = $obj1->show_output();
        if(is_numeric($res[0])){
            echo json_encode(array('message'=>'User Blocked!','status'=>true));
        }
        else{
            echo json_encode(array('message'=>'Something went wrong!','status'=>false));
        }
    }
    else{
        $obj1 = new Database();
        $obj1->Update('user',array('user_role'=>'1'),"user_id=$id");
        $res = $obj1->show_output();
        if(is_numeric($res[0])){
            echo json_encode(array('message'=>'User Unblocked!','status'=>true));
        }
        else{
            echo json_encode(array('message'=>'Something went wrong!','status'=>false));
        }
    }
}








if(isset($_POST['delete_user_id'])){
    $id = $_POST['delete_user_id'];
    $obj = new Database();
    $obj->Delete('user',"user_id=$id");
    $result = $obj->show_output();
    if(is_numeric($result[0])){
        echo json_encode(array('message','User Deleted!','status'=>true));
    }
    else{
        echo json_encode(array('message','User not Deleted!','status'=>false));
    }
}

?>