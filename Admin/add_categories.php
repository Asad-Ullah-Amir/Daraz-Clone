<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-md-4">
            <h2 class="admin_heading_m mt-4">Add New Category</h2>

            <form action="">
                <div class="mt-5 w-50 width_control">
                    <label for="add_category" class="form-label">Category Name</label>
                    <input type="text" name="new_category" id="add_category" class="form-control">

                    <div class="d-flex mt-4">
                        <button type="submit" class="btn btn_submit">Sumbit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>