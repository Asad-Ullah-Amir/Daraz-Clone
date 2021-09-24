<?php 
include "../../config.php";


if(isset($_POST['adding_brand'])){
    if(!isset($_POST['add_brand_cat'])){
        echo json_encode(array('message'=>'Please Select a category!','status'=>false)); exit;
    }
    $b_title = htmlentities($_POST['add_title_brand'],ENT_QUOTES);
    $add_brand_cat = $_POST['add_brand_cat'];
    $obj1 = new Database();
    $obj1->Select('brands','*',null,"brand_title LIKE '$b_title'");
    $res = $obj1->show_output();
    if(count($res[0]) >= 1){
        echo json_encode(array('message'=>'Brand with this name already exists!','status'=>false));
    }else{
        $obj = new Database();
        $obj->Insert('brands',array('brand_title'=>$b_title,'brand_cat'=>$add_brand_cat));
        $result = $obj->show_output();
        if(is_numeric($result[0])){
            echo json_encode(array('message'=>'Success!','status'=>true));
        }
        else{
            echo json_encode(array('message'=>'Something went wrong!','status'=>false));
        }
    }
}


if(isset($_POST['editing_brand'])){
    if(!isset($_POST['edit_brand_cat'])){
        echo json_encode(array('message'=>'Please Select a category!','status'=>false)); exit;
    }
    $edit_brand_id = $_POST['edit_brand_id'];
    $edit_title_brand = htmlentities($_POST['edit_title_brand'],ENT_QUOTES);
    $edit_brand_cat = $_POST['edit_brand_cat'];
    $obj = new Database();
    $obj->Select('brands','*',null,"brand_title LIKE '$edit_title_brand' AND brand_id != $edit_brand_id");
    $res = $obj->show_output();
    if(count($res[0]) >= 1){
        echo json_encode(array('message'=>'Brand with this name already exists!','status'=>false)); exit;
    }
    else{
        $obj1 = new Database();
        $obj1->Insert('brands',array('brand_title'=>$edit_title_brand,'brand_cat'=>$edit_brand_cat));
        $result = $obj1->show_output();
        if(is_numeric($result[0])){
            echo json_encode(array('message'=>'Brand Edited!','status'=>true));
        }
        else{
            echo json_encode(array('message'=>'Something went wrong!','status'=>false));
        }
    }
}




if(isset($_POST['delete_brand_id'])){
    $id = $_POST['delete_brand_id'];
    $obj = new Database();
    $obj->Delete('brands',"brand_id=$id");
    $result = $obj->show_output();
    if(is_numeric($result[0])){
        echo json_encode(array('message'=>'ok','status'=>true));
    }
    else{
        echo json_encode(array('message'=>'Something went wrong!','status'=>false));
    }
}
?>