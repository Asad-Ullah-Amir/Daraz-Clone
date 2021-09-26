<?php include "./partials/header.php"; ?>

<div class="container-fluid cart_contain px-md-5">
    <div class="row g-4 mt-4 mb-4">
        <div class="col-md-8">
            <div class="heading bg-white">
                <h1 class="ms-3">You Carts</h1>
            </div>
            <div class="cart_items bg-white">


                <?php
                $obj = new Database();
                $obj->Select('add_cart', '*', null, "user_id={$_SESSION['user_id']}",null,5);
                $result = $obj->show_output();
                if ($result) {
                    foreach ($result[0] as $value) {
                ?>
                        <?php
                        $obj2 = new Database();
                        $obj2->select_query("SELECT * FROM `products` WHERE product_id={$value['product_id']} LIMIT 5");
                        $res = $obj2->show_output();
                        foreach ($res[0] as $val) {
                        ?>
                            <div class="cart_item">
                                <div class="row py-4">
                                    <div class="col-3 d-flex justify-content-end">
                                        <a href="product.php?product_id=<?php echo $val['product_id']; ?>"><img src="./Admin/uploads/<?php echo $val['featured_image'] ?>" class="cart_images" alt=""></a>
                                    </div>
                                    <div class="col-9">
                                        <div class="row justify-content-center align-items-baseline">
                                            <div class="col-sm-8 cart_title"><a href="product.php?product_id=<?php echo $val['product_id']; ?>"><?php echo $val['product_title'] ?></a></div>
                                            <div class="col-sm-4 d-md-flex d-sm-block d-flex justify-content-between">
                                                <div>
                                                    <span class="text-info" style="font-size: 1.1rem;"><?php echo $val['product_price']; ?></span>
                                                    <p class="text-muted line-through" style="margin-bottom: 0;">Rs. 400</p>
                                                    <p class="m-0 delete_cart" data-id="<?php echo $val['product_id'] ?>" style="cursor: pointer;"><i class="far fa-trash-alt"></i></p>
                                                </div>
                                                
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
                    echo $obj->pagination('add_cart',null,"user_id={$_SESSION['user_id']}",5);
                    ?>
                </nav>
            </div>
        </div>
        <div class="col-4 d-md-block d-none bg-white">
            Ads
        </div>
    </div>
</div>



<?php include "./partials/footer.php"; ?>