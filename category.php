<?php include "./partials/header.php"; ?>

<?php 
if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
}
else{
    $cat_id = "";
}
?>
<!-- Category Name and Description -->
<div class="container-fluid px-md-3 mt-md-4 mt-2">
    <div class="jumbotron py-sm-5 py-4  px-4">
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <?php  
                $cat_name = new Database();
                $cat_name->Select('categories','*',null,"cat_id=$cat_id");
                $cat_name_res = $cat_name->show_output();
                if($cat_name_res){
                    foreach ($cat_name_res[0] as $cat_name_val) {
                        
                ?>
                <h1><?php echo $cat_name_val['cat_title']; ?></h1>
                <?php } } else{echo "NO name of this category!";} ?>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid px-md-4 py-4">
    <div class="items_container px-2">
        <div class="row category_items px-3 count_number">
            <?php  
              $limit = 3;
              $product_obj = new Database();
              $product_obj->select_query("SELECT * FROM `products` WHERE product_cat=$cat_id LIMIT $limit");
              $res_product_obj = $product_obj->show_output();
            //   print_r($res_product_obj);
              if ($res_product_obj) {
                  foreach ($res_product_obj[0] as $product_val) {
            ?>
            <div class="col-lg-2 col-sm-3 col-4 p-0 parent_hover">
                <div class="card mx-2">
                    <a href="product.php?product_id=<?php echo $product_val['product_id']; ?>"><img src="./Admin/uploads/<?php echo $product_val['featured_image']; ?>" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <p class="card-title">
                            <a href="product.php?product_id=<?php echo $product_val['product_id']; ?>"" style="text-decoration:none; color:black;">
                            <?php echo substr($product_val['product_title'],0,50); ?>
                            </a>
                        </p>
                        <p class="card-text" style="color:#C58206;">
                            Rs.<?php echo $product_val['product_price']; ?>
                        </p>
                    </div>
                </div>
                <div class="child_hover">
                    <div class="center d-flex justify-content-center">
                        <div>
                            <a href="javascript:void(0)" class="add_whishlist" data-id="<?php echo $product_val['product_id']; ?>"><i class="fas fa-heart custom_icon"></i></a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="add_cart" data-id="<?php echo $product_val['product_id']; ?>"><i class="fas fa-cart-plus custom_icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else{echo "<h2>This category is empy!</h2>";} ?>

        </div>
        <div class="load_more mt-4">
        <?php 
            $count = new Database();
            $count->Select('products','*');
            $count_result = $count->show_output();
            if(count($count_result[0]) > $limit){
            ?>
            <a href="javascript:void(0)" data-catid="<?php echo $cat_id; ?>" class="btn btn-outline-primary b_t_n load_more_btn" data-id="<?php echo $limit; ?>" style="width: 100%;">Load More</a>
            <?php } ?>
        </div>
    </div>
</div>




<?php include "./partials/footer.php"; ?>