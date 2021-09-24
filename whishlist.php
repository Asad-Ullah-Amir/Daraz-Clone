<?php 
// session_start();
if(isset($_SESSION['name'])){
    header('location: http://localhost/daraz-clone');
}

?>
<?php include "./partials/header.php"; ?>

<div class="container-fluid px-md-5 px-sm-4 px-2  whishlist_contain">
    <div class="row bg-white mt-sm-3 mt-5">
        <div class="col-12">
            <h1 class="whishlist_heading ms-3">Your Whishlist</h1>
        </div>
    </div>
    <div class="row m-4 bg-white">
        <div class="col-12">
            <div class="whishlist_product">
                <div class="row py-4">
                    <div class="col-sm-2 col-3 d-flex justify-content-end">
                        <a style="width: 100%;" href="product.php"><img src="./images/card1.jpg" class="whishlist_images" alt=""></a>
                    </div>
                    <div class="col-sm-10 col-9">
                        <div class="row justify-content-center align-items-baseline">
                            <div class="col-sm-8 whishlist_title"><a href="product.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ipsa.</a></div>
                            <div class="col-sm-4 d-md-flex d-sm-block d-flex justify-content-between">
                                <div>
                                    <span class="text-info" style="font-size: 1.1rem;">Rs. 200</span>
                                    <p class="text-muted line-through" style="margin-bottom: 0;">Rs. 400</p>
                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                </div>
                                <div class="quantity_handle me-2">
                                    <input type="number" step="1" min="1" max="5" value='1' name="" id="number_inp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whishlist_product">
                <div class="row py-4">
                    <div class="col-sm-2 col-3 d-flex justify-content-end">
                        <img src="./images/card1.jpg" class="whishlist_images" alt="">
                    </div>
                    <div class="col-sm-10 col-9">
                        <div class="row justify-content-center align-items-baseline">
                            <div class="col-sm-8 whishlist_title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ipsa.</div>
                            <div class="col-sm-4 d-md-flex d-sm-block d-flex justify-content-between">
                                <div>
                                    <span class="text-info" style="font-size: 1.1rem;">Rs. 200</span>
                                    <p class="text-muted line-through" style="margin-bottom: 0;">Rs. 400</p>
                                    <i class="far fa-trash-alt"></i>
                                </div>
                                <div class="quantity_handle me-2">
                                    <input type="number" step="1" min="1" max="5" value='1' name="" id="number_inp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./partials/footer.php"; ?>