<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-9 ps-md-4">
            <h2 class="mt-4 admin_heading_m">Add New Product</h2>
            <form action="">
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
                                    <option value="1">Electronics</option>
                                    <option value="2">Clothes</option>
                                    <option value="3">Shop</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6 mt-4">
                                <label for="form-label" id="product_sub_category">Product sub-category</label>
                                <select name="product_sub_category" class="form-select" id="product_sub_category">
                                    <option selected disabled>Select One</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Clothes</option>
                                    <option value="3">Shop</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6 mt-4">
                                <label for="form-label" id="product_brand">Product Brand</label>
                                <select name="product_brand" class="form-select" id="product_brand">
                                    <option selected disabled>Select One</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Clothes</option>
                                    <option value="3">Shop</option>
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
                            <input type="file" name="product_image" id="product_image">
                        </div>
                        <div class="mt-4">
                            <label for="product_price" class="form-label">Product Price</label>
                            <input type="text" name="product_price" id="product_price" class="form-control">
                        </div>
                        <div class="mt-4">
                            <label for="available_quantity" class="form-label">Available Quantity</label>
                            <input type="text" name="available_quantity" id="available_quantity" class="form-control">
                        </div>
                        <div class="mt-4">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" id="status" class="form-control">
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