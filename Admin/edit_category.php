<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-md-4">
            <h2 class="admin_heading_m mt-4">Edit Category</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>
            <form action="" id="edit_category">
                <div class="mt-5 w-50 width_control">
                    <label for="add_category" class="form-label">Category Name</label>
                    <?php
                    $id = $_GET['id'];
                    $obj = new Database();
                    $obj->Select('categories','*',null,"cat_id=$id");
                    $result = $obj->show_output();
                    ?>
                    <input type="text" name="edit_cat" value="<?php echo $result[0][0]['cat_title']; ?>" id="edit_cat" class="form-control">
                    <input type="hidden" name="category_id" value="<?php echo $result[0][0]['cat_id']; ?>" id="cat_id" class="form-control">

                    <div class="d-flex mt-4">
                        <button type="submit" class="btn btn_submit">Sumbit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>