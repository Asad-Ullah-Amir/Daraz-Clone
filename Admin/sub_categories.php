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
                        <?php 
                        $obj = new Database();
                        $obj->Select('sub_categories','*','categories ON sub_categories.cat_parent=categories.cat_id',null,'sub_cat_id DESC',4);
                        $result = $obj->show_output();
                        foreach ($result[0] as  $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['sub_cat_title']; ?></td>
                            <td><?php echo $value['cat_title']; ?></td>
                            <?php 
                            if($value['show_in_menu'] == 1){
                                $str = "checked";
                            }
                            else{
                                $str = '';
                            }
                            ?>
                            <td><input data-id="<?php echo $value['sub_cat_id']; ?>" class="check_subCategory" type="checkbox" <?php echo $str; ?> /></td>
                            <td><a href="edit_subCategory.php?id=<?php echo $value['sub_cat_id']; ?>"><i class="fas fa-edit"></i></a> | <a href="javascript:void(0)" data-id="<?php echo $value['sub_cat_id'] ?>" class="detele_sub_category"><i class="fas fa-trash-alt"></i></a></td>
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
                    echo $obj->pagination('sub_categories','categories ON sub_categories.cat_parent=categories.cat_id',null,4);
                    ?>
                </nav>
            </div>

        </div>
    </div>
</div>


<?php include "footer.php"; ?>