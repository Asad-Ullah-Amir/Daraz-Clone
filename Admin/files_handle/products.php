<?php
include "../../config.php";
if (isset($_POST['add_product'])) {
    if (!empty($_FILES['product_image'])) {

        if (empty($_POST['product_category'])) {
            echo json_encode(array('message' => 'Please Select a category','status'=>false)); exit;
        } else {
            if(empty($_POST['product_title'])){
                echo json_encode(array('message' => 'Product Title is required!','status'=>false)); exit;
            }
            else{
                $product_title = htmlentities($_POST['product_title'],ENT_QUOTES);
            }
            if(empty($_POST['product_category'])){
                echo json_encode(array('message' => 'Product Category is required!','status'=>false)); exit;
            }
            else{
                $product_category = htmlentities($_POST['product_category'],ENT_QUOTES);
            }
            !empty($_POST['product_sub_category']) ? $product_sub_category = htmlentities($_POST['product_sub_category']) : $product_sub_category = 0;
            !empty($_POST['product_brand']) ? $product_brand = htmlentities($_POST['product_brand']) : $product_brand = 0;
            if(empty($_POST['product_description'])){
                echo json_encode(array('message' => 'Product Description is required!','status'=>false)); exit;
            }
            else{
                $product_description = htmlentities($_POST['product_description'],ENT_QUOTES);
            }
            if(empty($_POST['product_price'])){
                echo json_encode(array('message' => 'Product Price is required!','status'=>false)); exit;
            }
            else{
                $product_price = htmlentities($_POST['product_price'],ENT_QUOTES);
            }
            if(empty($_POST['available_quantity'])){
                echo json_encode(array('message' => 'Product Quantity is required!','status'=>false)); exit;
            }
            else{
                $available_quantity = htmlentities($_POST['available_quantity'],ENT_QUOTES);
            }
            $status = htmlentities($_POST['status']);
            $img_name = $_FILES['product_image']['name'];
            $img_size = $_FILES['product_image']['size'];
            $file_type = $_FILES['product_image']['type'];
            $tmp_name = $_FILES['product_image']['tmp_name'];
            $errors = [];
            $img_extension = pathinfo($img_name,PATHINFO_EXTENSION);
            $img_new_name = time() . '-' . $img_name;
            $extentions = array('jpg','jpeg','gif','png');
            if(in_array($img_extension,$extentions)===false){
                echo json_encode(array('message' => 'Only Image files are Allowed!','status'=>false)); exit;
            }
            if($img_size > 2097152){
                echo json_encode(array('message' => 'Maximum file size is 2MB!','status'=>false)); exit;
            }
            
            // echo json_encode(array('message' => 'OK'));
            $obj = new Database();
            $obj->Insert('products',array('product_code'=>time(),'product_cat'=>$product_category,'product_sub_cat'=>$product_sub_category,'product_brand'=>$product_brand,'product_title'=>$product_title,'product_price'=>$product_price,'product_desc'=>$product_description,'featured_image'=>$img_new_name,'qty'=>$available_quantity,'product_keywords'=>null,'product_views'=>0,'product_status'=>$status));
            $result = $obj->show_output();
            if(is_numeric($result[0])){
                if(move_uploaded_file($tmp_name,"../uploads/".$img_new_name)){
                    echo json_encode(array('message' => 'Product Added!','status'=>true));
                }
            }
            else{
                echo json_encode(array('message' => $result[0],'status'=>false));
            }
            
        }
    }
    else{
        echo json_encode(array('message' => 'Please Select an Image!','status'=>false));
    }
}




if(isset($_POST['edit_product'])){
    // echo json_encode(array('message'=>'Yeah','status'=>false));

        if (empty($_POST['product_category'])) {
            echo json_encode(array('message' => 'Please Select a category','status'=>false)); exit;
        } else {
            if(empty($_POST['product_title'])){
                echo json_encode(array('message' => 'Product Title required!','status'=>false)); exit;
            }
            else{
                $product_title = htmlentities($_POST['product_title'],ENT_QUOTES);
            }
            if(empty($_POST['product_category'])){
                echo json_encode(array('message' => 'Product Category required!','status'=>false)); exit;
            }
            else{
                $product_category = htmlentities($_POST['product_category'],ENT_QUOTES);
            }
            !empty($_POST['product_sub_category']) ? $product_sub_category = htmlentities($_POST['product_sub_category']) : $product_sub_category = 0;
            !empty($_POST['product_brand']) ? $product_brand = htmlentities($_POST['product_brand']) : $product_brand = 0;
            if(empty($_POST['product_description'])){
                echo json_encode(array('message' => 'Product Description required!','status'=>false)); exit;
            }
            else{
                $product_description = htmlentities($_POST['product_description'],ENT_QUOTES);
            }
            if(empty($_POST['product_price'])){
                echo json_encode(array('message' => 'Product Price required!','status'=>false)); exit;
            }
            else{
                $product_price = htmlentities($_POST['product_price'],ENT_QUOTES);
            }
            if(empty($_POST['available_quantity'])){
                echo json_encode(array('message' => 'Product Quantity required!','status'=>false)); exit;
            }
            else{
                $available_quantity = htmlentities($_POST['available_quantity']);
            }
            $status = htmlentities($_POST['status']);
            $id = $_POST['edit_id'];
            $old_img = $_POST['old_img'];
            if($_FILES['product_image']['name'] != ''){
                $img_name = $_FILES['product_image']['name'];
                $img_size = $_FILES['product_image']['size'];
                $file_type = $_FILES['product_image']['type'];
                $tmp_name = $_FILES['product_image']['tmp_name'];
                $errors = [];
                $img_extension = pathinfo($img_name,PATHINFO_EXTENSION);
                $img_new_name = time() . '-' . $img_name;
                $extentions = array('jpg','jpeg','gif','png');
                if(in_array($img_extension,$extentions)===false){
                    echo json_encode(array('message' => 'Only Image files are Allowed!','status'=>false)); exit;
                }
                if($img_size > 2097152){
                    echo json_encode(array('message' => 'Maximum file size is 2MB!','status'=>false)); exit;
                }
            }
            else{
                $img_new_name = $old_img;
            }
            
            $obj = new Database();
            $obj->Update('products',array('product_code'=>time(),'product_cat'=>$product_category,'product_sub_cat'=>$product_sub_category,'product_brand'=>$product_brand,'product_title'=>$product_title,'product_price'=>$product_price,'product_desc'=>$product_description,'featured_image'=>$img_new_name,'qty'=>$available_quantity,'product_keywords'=>null,'product_views'=>0,'product_status'=>$status),"product_id=$id");
            $result = $obj->show_output();
            if(is_numeric($result[0])){
                if($_FILES['product_image']['name'] != ''){
                    move_uploaded_file($tmp_name,"../uploads/".$img_new_name);
                    unlink("../uploads/$old_img");
                }
                echo json_encode(array('message' => 'Product Added!','status'=>true));
                
            }
            else{
                echo json_encode(array('message' => $result[0],'status'=>false));
            }
            
        }
}


if(isset($_POST['delete_id'])){
    $id = $_POST['delete_id'];
    $img = $_POST['delete_image'];
    $obj = new Database();
    $obj->Delete('products',"product_id=$id");
    $result = $obj->show_output();
    if(is_numeric($result[0])){
        unlink('../uploads/'.$img);
        echo json_encode(array('message'=>$result[0],'status'=>true,'id'=>$id));

    }
    else{
        echo json_encode(array('message'=>'Couldn\'t delete!','status'=>false));

    }
}


 ?>