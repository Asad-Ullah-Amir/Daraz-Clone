<?php
include "../../config.php";


if (isset($_POST['settings_updation'])) {
    if (!empty($_POST['site_name'])) { $site_name = $_POST['site_name'];} else { echo json_encode(array('message' => 'Site Name is empty', 'status' => false));exit;}
    if (!empty($_POST['site_title'])) { $site_title = $_POST['site_title'];} else { echo json_encode(array('message' => 'Site title is empty', 'status' => false));exit;}
    if (!empty($_POST['site_desc'])) { $site_desc = $_POST['site_desc'];} else {echo json_encode(array('message' => 'Site description is empty', 'status' => false));exit;}
    if (!empty($_POST['site_email'])) {$site_email = $_POST['site_email'];} else {echo json_encode(array('message' => 'Site email is empty', 'status' => false));exit;}
    if (!empty($_POST['site_phone'])) {$site_phone = $_POST['site_phone'];} else {echo json_encode(array('message' => 'Site phone is empty', 'status' => false));exit;}
    if (!empty($_POST['footer_text'])) {$footer_text = $_POST['footer_text'];} else {echo json_encode(array('message' => 'Site footer text is empty', 'status' => false));exit;}
    if (!empty($_POST['currency_format'])) {$currency_format = $_POST['currency_format'];} else {echo json_encode(array('message' => 'Site currency format is empty', 'status' => false));exit;}
    if (!empty($_POST['contact_address'])) {$contact_address = $_POST['contact_address'];} else {echo json_encode(array('message' => 'Site contact address is empty', 'status' => false));exit;}
}
$settings_id = $_POST['settings_id'];
$old_img = $_POST['logo_n'];
if($_FILES['site_logo']['name'] !== ""){
    $img_name = $_FILES['site_logo']['name'];
    $img_new_name = time(). '-' .$img_name;
    $img_size = $_FILES['site_logo']['size'];
    $file_type = $_FILES['site_logo']['type'];
    $img_tmp_name = $_FILES['site_logo']['tmp_name'];
    $img_extention = pathinfo($img_name,PATHINFO_EXTENSION);
    $extentions = array('jpg','png','jpeg','gif');
    if(in_array($img_extention,$extentions)){
        if($img_size > 2097152){
            echo json_encode(array('message'=>'Maximum file size 2MB!','status'=>false));exit;
        }
        
    }
    else{
        echo json_encode(array('message'=>'Only Image files are allowed!','status'=>false));exit;
        
    }
}
else{
    $img_new_name = $old_img;
}

$obj = new Database();
$obj->Update('options',array('site_name'=>$site_name,'site_title'=>$site_title,'site_logo'=>$img_new_name,'site_desc'=>$site_desc,'footer_text'=>$footer_text,'currency_format'=>$currency_format,'contact_phone'=>$site_phone,'contact_email'=>$site_email,'contact_address'=>$contact_address),"s_no=$settings_id");
$result = $obj->show_output();
if($result){
    if(is_numeric($result[0])){
        if($_FILES['site_logo']['name'] !== ''){
            move_uploaded_file($img_tmp_name,'../site_logo/'.$img_new_name);
            unlink("../site_logo/".$old_img);
        }
        echo json_encode(array('message'=>'Settings Upadated!','status'=>true));
    }
}
else{
    echo json_encode(array('message'=>'Something went wrong....try again!','status'=>false));
}



?>