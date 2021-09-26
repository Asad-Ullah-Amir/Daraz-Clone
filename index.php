<!-- Include Header -->
<?php include "./partials/header.php"; ?>

<?php
$obj = new Database();
?>
<!-- Main Body Part -->

<!-- Carousal  -->
<div class="carousal_slider">
    <div class="carousal_items" id="carousal_items">
        <div class="carousal_slide">
            <img src="./images/slide_1.jpg" alt="">
        </div>
        <div class="carousal_slide">
            <img src="./images/slide_2.jpg" alt="">
        </div>
        <div class="carousal_slide">
            <img src="./images/slide_3.jpg" alt="">
        </div>
        <div class="carousal_slide">
            <img src="./images/slide_4.png" alt="">
        </div>
        <div class="carousal_slide">
            <img src="./images/slide_5.jpg" alt="">
        </div>
    </div>


    <div class="indicators" id="indicators">
        <span class="indication bg_change"></span>
        <span class="indication"></span>
        <span class="indication"></span>
        <span class="indication"></span>
        <span class="indication"></span>
    </div>




    <div class="information ms-md-5 d-sm-block d-none">
        <?php
        $obj = new Database();
        $obj->Select('categories', '*');
        $result = $obj->show_output();
        // echo $result;
        if ($result) {
            foreach ($result[0] as $value) {

        ?>
                <ul style="list-style: none;">
                    <li><a href="category.php?cat_id=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_title']; ?></a>
                        <div class="sub_category_list">
                            <?php
                            $obj3 = new Database();
                            $obj3->Select('sub_categories', '*', '', "cat_parent={$value['cat_id']} AND show_in_menu=1");
                            $sub_cat_res = $obj3->show_output();
                            if ($sub_cat_res) {
                                foreach ($sub_cat_res[0] as $val) {

                            ?>
                                    <ul>
                                        <li><a href="sub_category.php?sub_cat_id=<?php echo $val['sub_cat_id']; ?>"><?php echo $val['sub_cat_title']; ?></a></li>
                                    </ul>
                            <?php }
                            } else {
                                echo "";
                            } ?>
                        </div>
                    </li>
                </ul>
        <?php }
        } else {
            echo "";
        } ?>
    </div>
</div>
<!-- Carousal End -->


<!-- Main Content Part -->
<!-- Sectin 1 fashion menu  -->
<section class="section_1">
    <div class="container-fluid px-md-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="fashion_menu">
                    <img src="./images/f1.png" alt="">
                    <i class="fas fa-angle-right right_arrow"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-1">
                <div class="fashion_menu">
                    <img src="./images/f2.gif" alt="">
                    <i class="fas fa-angle-right right_arrow"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-1">
                <div class="fashion_menu">
                    <img src="./images/f3.png" alt="">
                    <i class="fas fa-angle-right right_arrow"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sectin 1 fashion menu end -->


<!-- Section 2 Sale section -->
<section class="section_2">
    <div class="container-fluid py-2">
        <div class="d-flex justify-content-between">
            <h3>Flash Sale</h3>
            <a href="#" class="d-md-none  d-block">SHOP MORE</a>
        </div>

        <div class="row row_1 pt-3 pb-2 align-items-baseline">
            <div class="col-md-2 col-sm-4 d-sm-block d-none d-flex align-items-center text-primary">On Sale Now</div>
            <div class="col-md-6 col-sm-8 d-flex justify-content-center align-items-center c_color pt-sm-0 pt-3" id="timer">
                <div class="d-flex align-items-baseline">

                    <p class="white_cl">Ending in</p>
                    <div class="ms-4">
                        <span class="time_box">10</span>
                        <span class="time_box">10</span>
                        <span class="time_box">10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-md-flex justify-content-end d-none text-end pe-4">
                <button class="btn btn_custom d-md-block d-none">SHOP MORE</button>
            </div>
        </div>
        <div class="row row_2 dynamic">
            <div class="col-md-2 col-sm-3 col-4 mt-sm-0 mt-3 parent_hover">
                <div class="card mx-2">
                    <a href="product.php"><img src="./images/card1.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <p class="card-title">
                            <a href="#" style="text-decoration:none; color:black;">
                                Azam Sons special Door and...
                            </a>
                        </p>
                        <p class="card-text" style="color:#C58206;">
                            Rs.200
                        </p>
                    </div>
                </div>
                <div class="child_hover">
                    <div class="center d-flex justify-content-center">
                        <div>
                            <a href="#"><i class="fas fa-heart custom_icon"></i></a>
                        </div>
                        <div>
                            <a href="#"><i class="fas fa-cart-plus custom_icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Popular Products Section -->
<section class="section_3">
    <div class="d-flex justify-content-between px-1 align-items-center">
        <h3>Popular Poducts</h3>
        <a href="collections.php" style="text-decoration: none;">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a>
    </div>
    <div class="container-fluid">
        <div class="row most_popular">
            <?php
            $popular_obj = new Database();
            $popular_obj->Select('products', '*', null, null, null, 12);
            $res_pop_obj = $popular_obj->show_output();
            if ($res_pop_obj) {
                foreach ($res_pop_obj[0] as $pop_val) {

            ?>
                    <div class="col-md-2 col-sm-3 col-4 px-1 parent_hover">
                        <div class="card mx-2">
                            <a href="product.php?product_id=<?php echo $pop_val['product_id']; ?>"><img src="./Admin/uploads/<?php echo $pop_val['featured_image']; ?>" class="card-img-top" alt=""></a>
                            <div class="card-body">
                                <p class="card-title">
                                    <a href="product.php?product_id=<?php echo $pop_val['product_id']; ?>" style="text-decoration:none; color:black;"><?php echo substr($pop_val['product_title'], 0, 40) . '........'; ?>
                                    </a>
                                </p>
                                <p class="card-text" style="color:#C58206;">
                                    Rs.<?php echo $pop_val['product_price']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="child_hover">
                            <div class="center d-flex justify-content-center">
                                <div>
                                    <a href="javascript:void(0)" class="add_whishlist" data-id="<?php echo $pop_val['product_id']; ?>"><i class="fas fa-heart custom_icon"></i></a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="add_cart" data-id="<?php echo $pop_val['product_id']; ?>"><i class="fas fa-cart-plus custom_icon"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } else {
                echo "<h2>No Products Found!</h2>";
            } ?>
        </div>
    </div>
</section>
<!-- Popular Products Section End  -->


<!-- Latest Products Section -->
<section class="section_3">
    <div class="d-flex justify-content-between px-1 align-items-center">
        <h3>Latest Poducts</h3>
        <a href="collections.php" style="text-decoration: none;">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a>
    </div>
    <div class="container-fluid">
        <div class="row most_latest">
            <?php
            $latest_obj = new Database();
            $latest_obj->select_query("SELECT * FROM `products` ORDER BY product_id DESC LIMIT 12");
            $res_lat_obj = $latest_obj->show_output();
            if ($res_lat_obj) {
                foreach ($res_lat_obj[0] as $lat_val) {

            ?>
                    <div class="col-md-2 col-sm-3 col-4 px-1 parent_hover">
                        <div class="card mx-2">
                            <a href="product.php?product_id=<?php echo $lat_val['product_id']; ?>"><img src="./Admin/uploads/<?php echo $lat_val['featured_image']; ?>" class="card-img-top" alt=""></a>
                            <div class="card-body">
                                <p class="card-title">
                                    <a href="product.php?product_id=<?php echo $lat_val['product_id']; ?>" style="text-decoration:none; color:black;">
                                        <?php echo substr($lat_val['product_title'], 0, 50) . '.......'; ?>
                                    </a>
                                </p>
                                <p class="card-text" style="color:#C58206;">
                                    Rs.<?php echo $lat_val['product_price']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="child_hover">
                            <div class="center d-flex justify-content-center">
                                <div>
                                    <a href="javascript:void(0)" class="add_whishlist" data-id="<?php echo $lat_val['product_id']; ?>"><i class="fas fa-heart custom_icon"></i></a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" data-id="<?php echo $lat_val['product_id']; ?>" class="add_cart"><i class="fas fa-cart-plus custom_icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<!-- Latest Products Section End  -->



<!-- Categories Section -->
<section class="section_4">
    <div class="d-flex justify-content-between px-1">
        <h3>Categories</h3>
        <!-- <a href="#">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a> -->
    </div>
    <div class="container-fluid">
        <div class="row p-0 scroll_handle">
            <?php
            $cat_obj = new Database();
            $cat_obj->Select('categories', '*', null, null, null, 12);
            $res_cat_obj = $cat_obj->show_output();
            if ($res_cat_obj) {
                foreach ($res_cat_obj[0] as $cat_val) {
            ?>
                    <div class="col-2 p-0 bord bord_right">
                        <a href="category.php?cat_id=<?php echo $cat_val['cat_id']; ?>" style="text-decoration: none; color:black;">
                            <div style="width: 100%;" class="d-flex flex-column align-items-center">
                                <img src="./images/cat1.jpg" style="width:50px" alt="">
                                <p><?php echo $cat_val['cat_title']; ?></p>
                            </div>
                        </a>
                    </div>
            <?php }
            }  ?>
        </div>
    </div>
</section>
<!-- Categories Section End -->


<!-- For You Section -->
<section class="section_5">
    <div class="d-flex justify-content-between">
        <h3>Just For You</h3>
        <!-- <a href="#">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a> -->
    </div>
    <div class="container-fluid">
        <div class="row dynamic py-2 gy-2" id="dynamic_2">
            <?php 
             $foryou_obj = new Database();
             $foryou_obj->select_query("SELECT * FROM `products` LIMIT 12,12");
             $res_foryou_obj = $foryou_obj->show_output();
             if ($res_foryou_obj) {
                 foreach ($res_foryou_obj[0] as $foryou_val) {
            ?>
            <div class="col-md-2 col-sm-3 col-4 px-1 parent_hover">
                <div class="card mx-2">
                    <a href="product.php?product_id=<?php echo $foryou_val['product_id']; ?>"> <img src="./Admin/uploads/<?php echo $foryou_val['featured_image']; ?>" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <p class="card-title">
                            <a href="product.php?product_id=<?php echo $foryou_val['product_id']; ?>" style="text-decoration:none; color:black;">
                            <?php echo substr($foryou_val['product_title'],0,50); ?>
                            </a>
                        </p>
                        <p class="card-text" style="color:#C58206;">
                            Rs.<?php echo $foryou_val['product_price']; ?>
                        </p>
                    </div>
                </div>
                <div class="child_hover">
                    <div class="center d-flex justify-content-center">
                        <div>
                            <a href="javascript:void(0)" class="add_whishlist" data-id="<?php echo $foryou_val['product_id']; ?>"><i class="fas fa-heart custom_icon"></i></a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="add_cart" data-id="<?php echo $foryou_val['product_id']; ?>"><i class="fas fa-cart-plus custom_icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else{echo "";} ?>
        </div>
    </div>
</section>




<!-- Include Footer -->
<?php include "./partials/footer.php"; ?>