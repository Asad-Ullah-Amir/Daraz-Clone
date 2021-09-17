<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="mt-4 admin_heading_m">Add New Brand</h2>



            <div class="mt-5 w-50 width_control">
                <form action="">

                    <label for="add_subCategory" class="form-label">Title</label>
                    <input type="text" name="new_category" id="add_subCategory" class="form-control">
                    <label for="add_category" class="form-label mt-3">Brand Category</label>
                    <select name="add_subCategoryParent" class="form-select" id="subCategoryParent">
                        <option value="1">Electronics</option>
                        <option value="1">Electronics</option>
                        <option value="1">Electronics</option>
                        <option value="1">Electronics</option>
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