<?php
include "config.php";
session_start();
$base = basename($_SERVER['REQUEST_URI']);
if(!isset($_SESSION['name'])){
    if($base == 'whishlist.php' || $base == 'add_cart.php'){
        header("location: {$url}/login.php ");
    }
}
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/category.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/add_cart.css">
    <link rel="stylesheet" href="./css/utility.css">
    <link rel="stylesheet" href="./css/collection.css">
    <link rel="stylesheet" href="./css/whishlist.css">
    <script src="./js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Daraz Head Image  -->
        <?php 
        $path = basename($_SERVER['PHP_SELF']);
        if($path !== 'user_profile.php'){
        ?>
        <div class="row" id="to_hide">
            <div class="col-lg-12 p-0">
                <div class="d-flex justify-content-center head_pic--container">
                    <img class="daraz_img" src="./images/daraz.gif" alt="">
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
        <!-- Daraz Navigation -->
        <div class="row ctrl-height py-2" id="Observe">

            <div class="col-md-2 d-flex justify-content-center text-center">
                <?php 
                $obj = new Database();
                $obj->Select('options','site_logo');
                $result = $obj->show_output();
                if($result){
                    $img = $result[0][0]['site_logo'];
                ?>
                <?php  }else{
                    $img = '';
                } ?>
                <a href="index.php"><img class="logo_img d-md-block d-none" src="./Admin/site_logo/<?php echo $img; ?>" alt=""></a>
                <h2 class="d-md-none d-block text-center">Daraz Shop</h2>
                <div class="d-sm-none d-block">
                    <ul class="d-flex hidden_verification" style="list-style: none;">
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7 col-sm-9 d-flex mt-md-4">
                <div class="search_bar position-relative">
                    <form action="search.php" id="search_query">
                        <input name="search" type="text" style="z-index:998;" class="input_style" id="search" placeholder="Search here" minlength="1">
                        <button type="submit" class="search_btn" style="z-index: 999; border:none; outline:none;"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="col-3 d-sm-flex d-none align-items-md-center">
                <div class="nav_icons pt-md-3 d-flex align-items-center" style="width: 100%;">
                <?php if(isset($_SESSION['username'])){ ?>
                    <div class="position-relative cont">
                        <button class="btn btn-primary user_name">Hello <?php echo $_SESSION['name']; ?> <i class="fas fa-chevron-circle-down"></i></button>
                        <div class="hidden position-absolute" id="show_nav" style="z-index: 1001;">
                            <a href="user_profile.php">My Profile</a>
                            <!-- <a href="signup.php">My Orders</a> -->
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="position-relative cont">
                        <img src="./images/signin.png" class="login_img ms-md-3 ms-2" height="35px" alt="">
                        <div class="hidden position-absolute" id="show_nav" style="z-index: 1001;">
                            <a href="login.php">Sign In</a>
                            <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="position-relative">
                        <?php 
                        if(isset($_SESSION['username'])){
                        ?>
                        <?php 
                        $wish_obj = new Database();
                        $wish_obj->Select('whish_list','*',null,"user_id={$_SESSION['user_id']}");
                        $wish_result = $wish_obj->show_output();
                        $count = count($wish_result[0]);
                        ?>
                        <?php 
                        if($count > 0){
                        ?>
                        <span class="position-absolute cart_wish"><?php echo $count; ?></span>
                        <?php } ?>
                        <?php } ?>
                        <a href="whishlist.php" class="text-dark" id="heart"><i class="fas fa-heart ms-md-4 ms-3 font_a"></i></a>
                    </div>
                    <div class="position-relative">
                    <?php 
                        if(isset($_SESSION['username'])){
                        ?>
                        <?php 
                        $cart_obj = new Database();
                        $cart_obj->Select('add_cart','*',null,"user_id={$_SESSION['user_id']}");
                        $cart_result = $cart_obj->show_output();
                        $count1 = count($cart_result[0]);
                        ?>
                        <?php 
                        if($count1 > 0){
                        ?>
                        <span class="position-absolute cart_wish"><?php echo $count1; ?></span>
                        <?php } ?>
                        <?php } ?>
                        <a href="add_cart.php" class="text-dark"><i class="fas fa-cart-plus ms-md-4 ms-3 font_a"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-sm-5 contain_all">
                <div class="contain">
                    <ul>
                        <li class="detect_show">Categories <i class="fas fa-angle-down arrow_handle pt-1" style="font-size: 1.2rem; font-weight:300;"></i>
                            <div class="categories_list">
                                <?php 
                                $obj = new Database();
                                $obj->Select('categories','*');
                                $result = $obj->show_output();
                                if($result){
                                    foreach ($result[0] as $value) {
                                        
                                ?>
                                <ul>
                                    <li>
                                        <a href="category.php?cat_id=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_title']; ?></a>
                                        <div class="sub_category_list">
                                            <?php  
                                            $obj3 = new Database();
                                            $obj3->Select('sub_categories','*',null,"cat_parent={$value['cat_id']}");
                                            $sub_cat_res = $obj3->show_output();
                                            if($sub_cat_res){
                                                foreach ($sub_cat_res[0] as $val) {
                                            ?>
                                            <ul>
                                                <li><a href="sub_category.php?sub_cat_id=<?php echo $val['sub_cat_id']; ?>"><?php echo $val['sub_cat_title']; ?></a></li>
                                            </ul>
                                            <?php } } else{
                                                echo "";
                                            } ?>
                                        </div>
                                    </li>
                                </ul>
                                <?php } } else{
                                    echo "";
                                } ?>
                            </div>
                        </li>
                        <li><a href="#"><i class="fas fa-shopping-basket"></i> d Mart</a></li>
                        <li><a href="#"><i class="fas fa-percent"></i> Fashion & Beauty</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Daraz Navigation End -->

    </div>











