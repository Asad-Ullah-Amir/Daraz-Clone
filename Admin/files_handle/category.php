<?php
include "../../config.php";
if (isset($_POST['add_cat'])) {
    $cat = htmlentities($_POST['new_category'],ENT_QUOTES);
    $obj3 = new Database();
    $obj3->Select('categories', '*', null, "cat_title LIKE '$cat'");
    $res = $obj3->show_output();
    if (count($res[0]) >= 1) {
        echo json_encode(array('message' => 'Category with this name already exists!', 'status' => false));
    } else {
        $obj = new Database();
        $obj->Insert('categories', array('cat_title' => $cat));
        $result = $obj->show_output();
        if (is_numeric($result[0])) {
            echo json_encode(array('message' => 'Category Added!', 'status' => true));
        } else {
            echo json_encode(array('message' => 'Category not Added!', 'status' => false));
        }
    }
}





if (isset($_POST['check_id'])) {
    $new_cat = htmlentities($_POST['edit_cat'],ENT_QUOTES);
    $c_id = $_POST['category_id'];
    $obj3 = new Database();
    $obj3->Select('categories', '*', null, "cat_title LIKE '$new_cat' AND cat_id !=$c_id");
    $res = $obj3->show_output();
    if (count($res[0]) >= 1) {
        echo json_encode(array('message' => 'Category with this name already exists!'));
    } else {
        // echo json_encode(array('message'=>$res[0],'status'=>false));
        $obj = new Database();
        $obj->Update('categories', array('cat_title' => $new_cat), "cat_id=$c_id");
        $result = $obj->show_output();
        if (is_numeric($result[0])) {
            echo json_encode(array('message' => "Updated", 'status' => true));
        } else {
            echo json_encode(array('message' => "NOt Updated", 'status' => false));
        }
    }
}




if (isset($_POST['delete_cat'])) {
    $id = $_POST['delete_cat'];
    $obj4 = new Database();
    $obj4->Select('sub_categories', '*', null, "cat_parent=$id");
    $res = $obj4->show_output();
    if (count($res[0]) >= 1) {
        echo json_encode(array('message' => "This Category Contains some sub-categories!", 'status' => false));
    } else {

        $obj = new Database();
        $obj->Delete('categories', "cat_id=$id");
        $result = $obj->show_output();
        if (is_numeric($result[0])) {
            echo json_encode(array('message' => "Deleted", 'status' => true));
        } else {
            echo json_encode(array('message' => "Not deleted", 'status' => false));
        }
    }
}




?>