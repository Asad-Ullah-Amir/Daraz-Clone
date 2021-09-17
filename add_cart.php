<?php include "./partials/header.php"; ?>

<div class="container-fluid cart_contain px-md-5">
    <div class="row g-4 mt-4">
        <div class="col-md-8">
            <div class="heading bg-white">
                <h1 class="ms-3">You Carts</h1>
            </div>
            <div class="cart_items bg-white">
                <div class="cart_item">
                    <div class="row py-4">
                        <div class="col-3 d-flex justify-content-end">
                           <a href="product.php"><img src="./images/card1.jpg" class="cart_images" alt=""></a>
                        </div>
                        <div class="col-9">
                            <div class="row justify-content-center align-items-baseline">
                                <div class="col-sm-8 cart_title"><a href="product.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, omnis.</a></div>
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
                <div class="cart_item">
                    <div class="row py-4">
                        <div class="col-3 d-flex justify-content-end">
                           <a href="product.php"><img src="./images/card1.jpg" class="cart_images" alt=""></a>
                        </div>
                        <div class="col-9">
                            <div class="row justify-content-center align-items-baseline">
                                <div class="col-sm-8 cart_title"><a href="product.php">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, omnis.</a></div>
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
        <div class="col-4 d-md-block d-none bg-white">
            Ads
        </div>
    </div>
</div>



<?php include "./partials/footer.php"; ?>