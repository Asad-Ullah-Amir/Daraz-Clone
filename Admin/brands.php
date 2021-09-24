<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-9 ps-sm-4">
        <div class="d-flex justify-content-between px-3 mt-4 heading_flex">
                <h2 class="admin_heading_m">All Brands</h2>
                <a href="add_brand.php" class="add_btn">Add new</a>
            </div>

            <div class="wrapper_subCategory mt-4">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $obj = new Database();
                        $obj->Select('brands','*','categories ON brands.brand_cat=categories.cat_id',null,'brand_id DESC',4);
                        $result = $obj->show_output();
                        if($result){
                            foreach ($result[0] as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['brand_title']; ?></td>
                            <td><?php echo $value['cat_title']; ?></td>
                            <td><a href="edit_brand.php?id=<?php echo $value['brand_id']; ?>" data-id="<?php echo $value['brand_id'] ?>"><i class="fas fa-edit"></i></a> | <a href="javascript:void(0)" class="brand_delete" data-id="<?php echo $value['brand_id'] ?>" ><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php } } ?>
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
                    echo $obj->pagination('brands','categories ON brands.brand_cat=categories.cat_id',null,4);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>