<?php
// session_start();
if (isset($_SESSION['name'])) {
    header('location: http://localhost/daraz-clone');
}

?>
<?php include "./partials/header.php"; ?>

<div class="container-fluid px-md-5 px-sm-4 px-2  whishlist_contain">
    <div class="row bg-white mt-sm-3 mt-5">
        <div class="col-12">
            <h1 class="whishlist_heading ms-3">Your Whishlist</h1>
        </div>
    </div>
    <div class="row m-4 bg-white">
        <div class="col-12">

            <?php
            $obj = new Database();
            $obj->Select('whish_list', '*', null, "user_id={$_SESSION['user_id']}",null,5);
            $result = $obj->show_output();
            if ($result) {
                foreach ($result[0] as $value) {
            ?>
                    <?php
                    $obj2 = new Database();
                    $obj2->select_query("SELECT * FROM `products` WHERE product_id={$value['product_id']}");
                    $res = $obj2->show_output();
                    foreach ($res[0] as $val) {
                    ?>
                        <div class="whishlist_product">
                            <div class="row py-4">
                                <div class="col-sm-2 col-3 d-flex justify-content-end">
                                    <a style="width: 100%;" href="product.php?product_id=<?php echo $val['product_id']; ?>"><img src="./Admin/uploads/<?php echo $val['featured_image']; ?>" class="whishlist_images" alt=""></a>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <div class="row justify-content-center align-items-baseline">
                                        <div class="col-sm-8 whishlist_title"><a href="product.php?product_id=<?php echo $val['product_id']; ?>"><?php echo $val['product_title']; ?></a></div>
                                        <div class="col-sm-4 d-md-flex d-sm-block d-flex justify-content-between">
                                            <div>
                                                <span class="text-info" style="font-size: 1.1rem;"><?php echo $val['product_price']; ?></span>
                                                <p class="text-muted line-through" style="margin-bottom: 0;">Rs. 400</p>
                                                <a href="javascript:void(0)" class="delete_wish" data-id="<?php echo $val['product_id']; ?>"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                            <!-- <div class="quantity_handle me-2">
                                    <input type="number" step="1" min="1" max="5" value='1' name="" id="number_inp">
                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php }
            } else {
                echo "<h2>No Record Found!</h2>";
            } ?>

        </div>
    </div>
    <!-- Pagination -->
    <div class="nav_wraper d-flex justify-content-center mt-4">
        <nav aria-label="Page navigation example">
            <!-- <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <div class="hover_bubble"></div>
                                <span aria-hidden="true">Pre</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">2 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">3 <div class="hover_bubble"></div></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <div class="hover_bubble"></div>
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul> -->
            <?php

           echo $obj->pagination('whish_list', null, "user_id={$_SESSION['user_id']}", 5);
            ?>
        </nav>
    </div>
</div>

<?php include "./partials/footer.php"; ?>