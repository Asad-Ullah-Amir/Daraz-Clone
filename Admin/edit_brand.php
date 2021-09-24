<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">

        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="mt-4 admin_heading_m">Edit Brand</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>



            <div class="mt-5 w-50 width_control">
                <form action="" id="edit_brand">
                    <?php
                    $id = $_GET['id'];
                    $obj6 = new Database();
                    $obj6->Select('brands', '*', null, "brand_id=$id");
                    $res = $obj6->show_output();
                    ?>

                    <label for="add_brand" class="form-label">Title</label>
                    <input type="text" value="<?php echo $res[0][0]['brand_title']; ?>" name="edit_title_brand" id="edit_title_brand" class="form-control">
                    <input type="hidden" name="edit_brand_id" value="<?php echo $res[0][0]['brand_id']; ?>">
                    <label for="add_brand_cat" class="form-label mt-3">Brand Category</label>
                    <select name="edit_brand_cat" class="form-select" id="edit_brand_cat">
                        <option disabled selected>Select Categories</option>
                        <?php
                        $obj = new Database();
                        $obj->Select('categories', '*');
                        $result = $obj->show_output();
                        foreach ($result[0] as $value) {
                        ?>
                            <?php
                            if ($value['cat_id'] == $res[0][0]['brand_cat']) {
                                $str = 'selected';
                            } else {
                                $str = '';
                            }
                            ?>
                            <option <?php echo $str; ?> value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_title']; ?></option>
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