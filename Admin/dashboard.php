<?php include "header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 items_container">
            <h2 class="ms-md-5 mt-4">Dashboard</h2>
            <hr class="ms-md-5">

            <div class="row items ms-md-5 mt-sm-1 mb-5 gy-sm-5 gy-3">
            <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("products");
                $prod_res = $obj->show_output();
                $products_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $products_count; ?></h2>
                        <h2 class="name_item">Products</h2>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("categories");
                $prod_res = $obj->show_output();
                $categories_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $categories_count; ?></h2>
                        <h2 class="name_item">Categoreis</h2>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("sub_categories");
                $prod_res = $obj->show_output();
                $sub_categories_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $sub_categories_count; ?></h2>
                        <h2 class="name_item">Sub Categories</h2>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("order_products");
                $prod_res = $obj->show_output();
                $order_products_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $order_products_count; ?></h2>
                        <h2 class="name_item">Orders</h2>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("brands");
                $prod_res = $obj->show_output();
                $brands_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $brands_count; ?></h2>
                        <h2 class="name_item">Brands</h2>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                <?php
                $obj = new Database();
                $obj->Select("user");
                $prod_res = $obj->show_output();
                $user_count = count($prod_res[0]);
                ?>
                <div class="box">
                        <h2 class="counts"><?php echo $user_count; ?></h2>
                        <h2 class="name_item">Users</h2>
                    </div>
                </div>
                <!-- <div class="col-sm-4 col-6">
                <div class="box">
                        <h2 class="counts">9</h2>
                        <h2 class="name_item">Products</h2>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>