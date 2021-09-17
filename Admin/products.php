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
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>PD2039</td>
                                <td>This is description of the product from database</td>
                                <td>Electronics</td>
                                <td></td>
                                <td>Rs. 200</td>
                                <td>12</td>
                                <td>dksjflk</td>
                                <td>Active</td>
                                <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="nav_wraper d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
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
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>

<?php include "footer.php"; ?>