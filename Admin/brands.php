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
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Kitchen</td>
                            <td>Furniture</td>
                            <td><a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>