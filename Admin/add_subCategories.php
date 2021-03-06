<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 px-sm-4">
            <h2 class="mt-4 admin_heading_m">Add New Sub Category</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>

            <div class="mt-5 w-50 width_control">
                <form action="" id="add_sub_categories">

                    <label for="add_subCategory" class="form-label">Title</label>
                    <input type="text" name="new_subCategory" id="add_subCategory" class="form-control">
                    <label for="add_category" class="form-label mt-3">Parent Category</label>
                    <select name="add_subCategoryParent" class="form-select" id="subCategoryParent">
                        <option selected disabled>Select Category</option>
                        <?php 
                        $obj = new Database();
                        $obj->Select('categories','*');
                        $result = $obj->show_output();
                        foreach ($result[0] as $value) {
                        ?>
                        <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_title']; ?></option>
                        <?php } ?>
                    </select>

                    <div class="d-flex mt-4">
                        <button type="submit" class="btn btn_submit">Sumbit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>