<?php include "header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-md-4 pt-4">
            <div class="d-flex justify-content-between px-3 heading_flex">
                <h2 class="admin_heading_m">All Categories</h2>
                <a href="add_categories.php" class="add_btn">Add new</a>
            </div>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>
            <div class="category_table mt-4">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $obj = new Database();
                        $obj->Select('categories','*',null,null,'cat_id DESC',3);
                        $result = $obj->show_output();
                        foreach ($result[0] as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['cat_title']; ?></td>
                            <td><a href="edit_category.php?id=<?php echo $value['cat_id']; ?>" data-id="<?php echo $value['cat_id']; ?>"><i class="fas fa-edit"></i></a> | <a href="javascript:void(0)" data-id="<?php echo $value['cat_id']; ?>" class="delete_category"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
                    echo $obj->pagination('categories',null,null,3);
                    ?>
                </nav>
            </div>


        </div>
    </div>
</div>
<?php include "footer.php"; ?>