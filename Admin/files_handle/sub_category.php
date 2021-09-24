<?php
include "../../config.php";

if (isset($_POST['add_sub_cat'])) {
    if (isset($_POST['add_subCategoryParent']) && !empty($_POST['add_subCategoryParent'])) {
        $add_subCategoryParent = $_POST['add_subCategoryParent'];
        $sub_cat = htmlentities($_POST['new_subCategory'],ENT_QUOTES);
        $obj = new Database();
        $obj->Select('sub_categories', '*', null, "sub_cat_title LIKE '$sub_cat'");
        $res = $obj->show_output();
        if (count($res[0]) >= 1) {
            echo json_encode(array('message' => 'Sub-Category with this name already exists!', 'status' => false));
        } else {
            $obj1 = new Database();
            $obj1->Insert('sub_categories', array('sub_cat_title' => $sub_cat, 'cat_parent' => $add_subCategoryParent));
            $result = $obj1->show_output();
            if (is_numeric($result[0])) {
                echo json_encode(array('message' => 'Sub Category Added!', 'status' => true));
            } else {
                echo json_encode(array('message' => 'Sub Category Not Added!', 'status' => false));
            }
        }
    } else {
        echo json_encode(array('message' => 'Please Select a Category!', 'status' => false));
    }
}



if (isset($_POST['edit_sub_cat'])) {
    $new_cat = htmlentities($_POST['edit_subCategory'],ENT_QUOTES);
    $edit_subCategoryParent = $_POST['edit_subCategoryParent'];
    $c_id = $_POST['edit_id'];
    $obj = new Database();
    $obj->Select('sub_categories', '*', null, "sub_cat_title LIKE '$new_cat' AND sub_cat_id !=$c_id");
    $res = $obj->show_output();
    if (count($res[0]) >= 1) {
        echo json_encode(array('message' => 'Sub-Category with this name already exists!', 'status' => false));
    } else {
        // echo json_encode(array('message'=>$res[0],'status'=>false));
        $obj = new Database();
        $obj->Update('sub_categories', array('sub_cat_title' => $new_cat, 'cat_parent' => $edit_subCategoryParent), "sub_cat_id=$c_id");
        $result = $obj->show_output();
        if (is_numeric($result[0])) {
            echo json_encode(array('message' => "Updated", 'status' => true));
        } else {
            echo json_encode(array('message' => "NOt Updated", 'status' => false));
        }
    }
}





if (isset($_POST['delete_sub_cat'])) {
    $id = $_POST['delete_sub_cat'];
    $obj = new Database();
    $obj->Delete('sub_categories', "sub_cat_id=$id");
    $result = $obj->show_output();
    if (is_numeric($result[0])) {
        echo json_encode(array('message' => 'Deleted Successfully!', 'status' => true));
    } else {
        echo json_encode(array('message' => 'Couldn\'t delete!', 'status' => false));
    }
}





if (isset($_POST['subCat_check_id'])) {
    $id = $_POST['subCat_check_id'];
    $obj = new Database();
    $obj->Select('sub_categories', '*', null, "sub_cat_id=$id");
    $res = $obj->show_output();
    if ($res[0][0]['show_in_menu'] == '1') {
        $obj1 = new Database();
        $obj1->Update('sub_categories',array('show_in_menu'=>0),"sub_cat_id=$id");
        $result = $obj1->show_output();
        if(is_numeric($result[0])){
            echo json_encode(array('message'=>'Updated!'));
        }
        else{
            echo json_encode(array('message'=>$result[0]));
        }
    } else {
        $obj2 = new Database();
        $obj2->Update('sub_categories',array('show_in_menu'=>1),"sub_cat_id=$id");
        $result = $obj2->show_output();
        if(is_numeric($result[0])){
            echo json_encode(array('message'=>'Updated!'));
        }
        else{
            echo json_encode(array('message'=>$result[0]));
        }
    }
}


?>