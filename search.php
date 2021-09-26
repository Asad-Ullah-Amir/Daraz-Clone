<?php include "./partials/header.php"; ?>
<?php
if (isset($_GET['search'])) {
    $query = $_GET['search'];
} else {
    $query = "";
}
?>
<div class="px-md-5 mt-5 mb-3">
    <h3>Results of your search "<?php echo $query ?>"</h3>
</div>

<div class="container-fluid px-md-4 py-4">
    <div class="items_container px-2">
        <div class="row category_items px-3">
            <?php

            $obj = new Database();
            $obj->Select('products', '*', null, "product_title LIKE '%$query%' OR product_desc LIKE '%$query%' OR product_price LIKE '%$query%'", null, 20);
            $result = $obj->show_output();
            if ($result) {
                foreach ($result[0] as $value) {
            ?>
                    <div class="col-lg-2 col-sm-3 col-4 p-0 parent_hover">
                        <div class="card mx-2">
                            <a href="product.php?product_id=<?php echo $value['product_id']; ?>"><img src="./Admin/uploads/<?php echo $value['featured_image']; ?>" class="card-img-top" alt=""></a>
                            <div class="card-body">
                                <p class="card-title">
                                    <a href="product.php?product_id=<?php echo $value['product_id']; ?>"" style=" text-decoration:none; color:black;">
                                        <?php echo substr($value['product_title'], 0, 50); ?>
                                    </a>
                                </p>
                                <p class="card-text" style="color:#C58206;">
                                    Rs.<?php echo $value['product_price']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="child_hover">
                            <div class="center d-flex justify-content-center">
                                <div>
                                    <a href="javascript:void(0)" class="add_whishlist" data-id="<?php echo $value['product_id']; ?>"><i class="fas fa-heart custom_icon"></i></a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="add_cart" data-id="<?php echo $value['product_id']; ?>"><i class="fas fa-cart-plus custom_icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } else {
                echo "<h2>No products found!</h2>";
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
            echo $obj->pagination('products', null, "product_title LIKE '%$query%' OR product_desc LIKE '%$query%' OR product_price LIKE '%$query%'", 20);
            ?>
        </nav>
    </div>
</div>

<?php include "./partials/footer.php"; ?>