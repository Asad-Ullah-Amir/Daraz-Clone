<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-9 mt-4">
            <div class="d-flex justify-content-between px-3 heading_flex">
                <h2 class="admin_heading_m">All Products</h2>
                <a href="add_product.php" class="add_btn">Add new</a>
            </div>
            <div class="wrapper mt-4">
                <div class="product_table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $obj = new Database();
                            $obj->Select('products','*',"categories ON products.product_cat=categories.cat_id LEFT JOIN brands ON products.product_brand=brands.brand_id",null,'product_id DESC',4);
                            $result = $obj->show_output();
                            foreach ($result[0] as $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['product_code']; ?></td>
                                <td><?php echo $value['product_title']; ?></td>
                                <td><?php echo $value['cat_title']; ?></td>
                                <td><?php echo $value['brand_title']; ?></td>
                                <td><?php echo $value['product_price']; ?></td>
                                <td><?php echo $value['qty']; ?></td>
                                <td><img src="./uploads/<?php echo $value['featured_image']; ?>" height="60" alt=""></td>
                                <td><?php echo $value['product_status'] == 1 ? 'Active':'NaN'; ?></td>
                                <td><a href="edit_product.php?id=<?php echo $value['product_id']; ?>" class="edit_product"><i class="fas fa-edit"></i></a> | <a data-id="<?php echo $value['product_id']; ?>" data-image="<?php echo $value['featured_image']; ?>" class="delete_product" href="javascript:void(0)"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="nav_wraper d-flex justify-content-center">
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
                    echo $obj->pagination('products',"categories ON products.product_cat=categories.cat_id LEFT JOIN brands ON products.product_brand=brands.brand_id",null,4);
                    ?>

                </nav>
            </div>

        </div>
    </div>
</div>

<?php include "footer.php"; ?>