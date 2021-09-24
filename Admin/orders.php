<?php include "header.php" ?>

<div class="container-fluid">
    <div class="row gx-5">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 mb-5">
            <h2 class="admin_heading_m mt-4">All Orders</h2>


            <div class="orders_wrapper mt-4">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Product Details</th>
                            <th>QTY</th>
                            <th>Total Amount</th>
                            <th>Customer Details</th>
                            <th>Order Date</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $obj = new Database();
                        $obj->Select('order_products','*',null,null,"order_id DESC",5);
                        $result = $obj->show_output();
                        if($result){
                            foreach ($result[0] as $value) {
                        ?>
                        <tr>
                            <td>0DR890</td>
                            <td><b>Product</b> Code: PDR490 <b>Quantity</b>:<?php echo $value['product_qty']; ?></td>
                            <td><?php echo $value['product_qty']; ?></td>
                            <td><?php echo $value['total_amount']; ?></td>
                            <td class="p_m_none">
                                <?php 
                                $obj3 = new Database();
                                $obj3->Select('user','f_name,l_name,mobile',null,"user_id={$value['product_user']}");
                                $user_result = $obj3->show_output();
                                ?>
                                <p><b>Name</b>: <?php echo $user_result[0][0]['f_name'] ?> <?php echo $user_result[0][0]['l_name'] ?></p>
                                <p><b>Mobile</b> : <?php echo $user_result[0][0]['mobile'] ?></p>
                            </td>
                            <td><?php echo $value['order_date']; ?></td>
                            <?php 
                            if($value['confirm'] == 1){
                                $str = "Paid";
                            }
                            else{
                                $str = "Pending";
                            }
                            ?>
                            <td><button class="btn btn-success btn-sm"><?php echo $str; ?></button></td>
                            <?php 
                            if($value['delivery'] == 1){
                                $str1 = "Completed";
                            }
                            else{
                                $str1 = "Pending";
                            }
                            ?>
                            
                            <td><button class="btn btn-primary"><?php echo $str1; ?></button></td>
                        </tr>
                        <?php } } else{echo "NO orders found!";} ?>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="nav_wraper d-flex justify-content-center mt-4">
                <nav aria-label="Page navigation example">
                    <!-- <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <div class="hover_bubble"></div>
                                <span aria-hidden="true">Pre</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">2 <div class="hover_bubble"></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">3 <div class="hover_bubble"></div></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <div class="hover_bubble"></div>
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul> -->
                    <?php 
                    echo $obj->pagination('order_products',null,null,5);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>