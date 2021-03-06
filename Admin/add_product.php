<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-9 ps-md-4">
            <h2 class="mt-4 admin_heading_m">Add New Product</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill all the fields!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>
            <form action="" id="add_product">
                <div class="row">
                    <div class="col-lg-8 col-md-7 ">
                        <div class="form-group mt-4">
                            <label for="product_title" class="form-label">Product Title</label>
                            <input type="text" name="product_title" id="product_title" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mt-4">
                                <label for="form-label" id="product_category">Product Category</label>
                                <select name="product_category" class="form-select" id="product_category">
                                    <option selected disabled>Select One</option>
                                    <?php
                                    $obj = new Database();
                                    $obj->Select('categories', '*');
                                    $cat_res = $obj->show_output();
                                    foreach ($cat_res[0] as $value) {
                                        echo "<option value='{$value['cat_id']}'>{$value['cat_title']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6 mt-4">
                                <label for="form-label" id="product_sub_category">Product sub-category</label>
                                <select name="product_sub_category" class="form-select" id="product_sub_category">
                                    <option selected disabled>Select One</option>
                                    <?php
                                    $obj = new Database();
                                    $obj->Select('sub_categories', '*');
                                    $sub_cat_res = $obj->show_output();
                                    foreach ($sub_cat_res[0] as $value) {
                                        echo "<option value='{$value['sub_cat_id']}'>{$value['sub_cat_title']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6 mt-4">
                                <label for="form-label" id="product_brand">Product Brand</label>
                                <select name="product_brand" class="form-select" id="product_brand">
                                    <option selected disabled>Select One</option>
                                    <?php
                                    $obj = new Database();
                                    $obj->Select('brands', '*');
                                    $brand_res = $obj->show_output();
                                    foreach ($brand_res[0] as $value) {
                                        echo "<option value='{$value['brand_id']}'>{$value['brand_title']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="textarea_edit_options mt-4">
                            <label for="" class="form-label">Product Description</label>
                            <textarea name="product_description" id="editor" style="min-height: 20vh !important;" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 mt-4 ps-2">
                        <div>
                            <label for="product_image" class="form-label">Featured Image</label>
                            <input type="file" name="product_image" id="product_image" />
                        </div>
                        <div class="mt-4">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="text" name="product_price" id="product_price" class="form-control">
                        </div>
                        <div class="mt-4">
                            <label for="available_quantity" class="form-label">Available Quantity</label>
                            <input type="number" min="1" name="available_quantity" id="available_quantity" class="form-control">
                        </div>
                        <div class="mt-4">
                            <label for="status" class="form-label">Status</label>
                            <input type="number" min='0' max='1' name="status" id="status" class="form-control">
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn_submit">Sumbit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include "footer.php"; ?>