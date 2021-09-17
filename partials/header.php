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
        <div class="row" id="to_hide">
            <div class="col-lg-12 p-0">
                <div class="d-flex justify-content-center head_pic--container">
                    <img class="daraz_img" src="./images/daraz.gif" alt="">
                </div>
            </div>
        </div>

        <!-- Daraz Navigation -->
        <div class="row ctrl-height py-2" id="Observe">

            <div class="col-md-2 d-flex justify-content-center text-center">
                <a href="index.php"><img class="logo_img d-md-block d-none" src="./images/logo.png" alt=""></a>
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
                    <input type="text" style="z-index:998;" class="input_style" placeholder="Search here">
                    <a href="#" class="search_btn" style="z-index: 999;"><i class="fas fa-search"></i></a>
                </div>
            </div>

            <div class="col-3 d-sm-flex d-none align-items-md-center">
                <div class="nav_icons pt-md-3 d-flex align-items-center" style="width: 100%;">
                    <div class="position-relative cont">
                        <img src="./images/signin.png" class="login_img ms-md-3 ms-2" height="35px" alt="">
                        <div class="hidden position-absolute" id="show_nav" style="z-index: 1001;">
                            <a href="login.php">Sign In</a>
                            <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                    <a href="whishlist.php" class="text-dark" id="heart"><i class="fas fa-heart ms-md-4 ms-3 font_a"></i></a>
                    <a href="add_cart.php" class="text-dark"><i class="fas fa-cart-plus ms-md-4 ms-3 font_a"></i></a>
                </div>
            </div>
            <div class="container-fluid px-sm-5 contain_all">
                <div class="contain">
                    <ul>
                        <li class="detect_show">Categories <i class="fas fa-angle-down arrow_handle pt-1" style="font-size: 1.2rem; font-weight:300;"></i>
                            <div class="categories_list">
                                <ul>
                                    <li>
                                        <a href="#">Electronic Devices</a>
                                        <div class="sub_category_list">
                                            <ul>
                                                <li><a href="#">Electronic sub</a></li>
                                                <li><a href="#">Electronic sub 2</a></li>
                                                <li><a href="#">Electronic sub 3</a></li>
                                                <li><a href="#">Electronic sub 4</a></li>
                                                <li><a href="#">Electronic sub 5</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Electronic Accessories</a>
                                        <div class="sub_category_list">
                                            <ul>
                                                <li><a href="#">Electronic Accessories sub</a></li>
                                                <li><a href="#">Electronic Accessories sub 2</a></li>
                                                <li><a href="#">Electronic Accessories sub 3</a></li>
                                                <li><a href="#">Electronic Accessories sub 4</a></li>
                                                <li><a href="#">Electronic Accessories sub 5</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">TV & Home Applinaces</a>
                                        <div class="sub_category_list">
                                            <ul>
                                                <li><a href="#">Applinaces sub</a></li>
                                                <li><a href="#">Applinaces sub 2</a></li>
                                                <li><a href="#">Applinaces sub 3</a></li>
                                                <li><a href="#">Applinaces sub 4</a></li>
                                                <li><a href="#">Applinaces sub 5</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Health & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#">Babies & Toys</a>
                                    </li>
                                    <li>
                                        <a href="#">Groceries & Pets</a>
                                    </li>
                                    <li>
                                        <a href="#">Home & Lifestyle</a>
                                    </li>
                                    <li>
                                        <a href="#">Women's Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#">Men's Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#">Sports & Outdoor</a>
                                    </li>
                                    <li>
                                        <a href="#">Watches, Bags & Jewelery</a>
                                    </li>
                                </ul>
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











