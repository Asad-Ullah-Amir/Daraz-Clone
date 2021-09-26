<?php include "./partials/header.php"; ?>
<?php
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
} else {
    $product_id = "";
}
$product = new Database();
$product->Select('products', '*', 'categories ON products.product_cat=categories.cat_id LEFT JOIN sub_categories ON products.product_sub_cat=sub_categories.sub_cat_id LEFT JOIN brands ON products.product_brand=brands.brand_id', "product_id=$product_id");
$result = $product->show_output();
?>

<div class="container-fluid px-md-5 py-4" style="background-color: #F5F5F5;">
    <div class="row py-3 py-5" style="background-color: white;">
        <div class="col-sm-5">
            <img src="./Admin/uploads/<?php echo $result[0][0]['featured_image']; ?>" class="single_product_image" alt="">
        </div>
        <div class="col-md-5 col-sm-7 content_cont py-3 d-flex flex-column justify-content-between">
            <h5><?php echo html_entity_decode($result[0][0]['product_title']); ?></h5>
            <p class="text-info mb-0" style="font-size: 1.1rem;">Rs.<?php echo $result[0][0]['product_price']; ?></p>
            <div class="quantity_handle me-2">
                <input type="number" step="1" min="1" max="5" value='1' name="" id="number_inp">
            </div>
            <div class="ratings mt-sm-5">
                <div class="d-flex mt-sm-3">
                    <p><i class="fas fa-star"></i></p>
                    <p><i class="fas fa-star"></i></p>
                    <p><i class="fas fa-star"></i></p>
                    <p><i class="fas fa-star"></i></p>
                    <p><i class="fas fa-star"></i></p>
                </div>
            </div>
            <div class="">
                <a href="#" class="btn btn_buy">Buy Now</a>
                <a href="javascript:void(0)" class="btn btn_cart add_cart" data-id="<?php echo $result[0][0]['product_id']; ?>">Add to Cart</a>
            </div>
            

        </div>
    </div>
    <div class="row bg-white mt-3 p-3">
        <div class="col-md-4 col-sm-7">
            <h3>Product Details</h3>
            <div class="row">
                <div class="col-6">
                    <div>
                        <p class="m-0" style="font-weight: 600;">Product Category</p>
                        <p class="m-0 text-muted" style="font-size: .94rem;"><?php echo $result[0][0]['cat_title']; ?></p>
                    </div>
                    <div>
                        <p class="m-0" style="font-weight: 600;">Product Sub-Category</p>
                        <p class="m-0 text-muted" style="font-size: .94rem;"><?php echo $result[0][0]['product_sub_cat'] == '0' ? 'No sub-category' : $result[0][0]['sub_cat_title']; ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <p class="m-0" style="font-weight: 600;">Product Brand</p>
                        <p class="m-0 text-muted" style="font-size: .94rem;"><?php echo $result[0][0]['product_brand'] == '0' ? 'No Brand' : $result[0][0]['brand_title']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php include "./partials/footer.php"; ?>