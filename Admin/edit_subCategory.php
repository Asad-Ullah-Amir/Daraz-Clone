<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        
        <div class="col-md-9 px-sm-4">
            <h2 class="mt-4 admin_heading_m">Edit Sub Category</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>

            <div class="mt-5 w-50 width_control">
                <form action="" id="edit_sub_categories">
                    <?php 
                    $id = $_GET['id'];
                    $obj2 = new Database();
                    $obj2->Select('sub_categories','*','categories ON sub_categories.cat_parent=categories.cat_id',"sub_cat_id=$id");
                    $res = $obj2->show_output();
                    foreach ($res[0] as $val) {
                    ?>
                    <label for="add_subCategory" class="form-label">Title</label>
                    <input type="text" value="<?php echo $val['sub_cat_title'] ?>" name="edit_subCategory" id="edit_subCategory" class="form-control">
                    <input type="hidden" name="edit_id" value="<?php echo $val['sub_cat_id']; ?>">
                    <label for="add_category" class="form-label mt-3">Parent Category</label>
                    <select name="edit_subCategoryParent" class="form-select" id="subCategoryParent">
                        <option selected disabled>Select Category</option>
                        <?php 
                        $obj = new Database();
                        $obj->Select('categories','*');
                        $result = $obj->show_output();
                        foreach ($result[0] as $value) {
                        ?>
                        <?php 
                        if($value['cat_id'] == $val['cat_parent']){
                            $str = 'selected';
                        }
                        else{
                            $str = '';
                        }
                        ?>
                        <option <?php echo $str; ?> value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_title']; ?></option>
                        <?php } ?>
                    </select>
                    <?php } ?>
                    <div class="d-flex mt-4">
                        <button type="submit" class="btn btn_submit">Sumbit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>