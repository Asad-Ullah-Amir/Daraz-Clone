<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php" ?>

        <div class="col-md-9 ps-md-4">
            <div class="d-flex justify-content-between px-3 mt-4 heading_flex">
                <h2 class="admin_heading_m">All Sub-Categories</h2>
                <a href="add_subCategories.php" class="add_btn">Add new</a>
            </div>
            <div class="wrapper_subCategory mt-4">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Show in Menu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><input type="checkbox" checked /></td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><input type="checkbox" checked /></td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><input type="checkbox" checked /></td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><input type="checkbox" checked /></td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><input type="checkbox" checked /></td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="nav_wraper d-flex justify-content-center mt-4">
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