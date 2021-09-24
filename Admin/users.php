<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="user_popup" id="user_popup">
            <div class="popup_center">
                <p class="user_view_close"><i class="fas fa-window-close"></i></p>
                <div class="row g-0 gx-1">
                    <h5>User Data</h5>
                    <div class="col-6 user_ul">
                        <ul>
                            <li><b>ID</b></li>
                            <li><b>First Name</b></li>
                            <li><b>Last Name</b></li>
                            <li><b>Username</b></li>
                            <li><b>Mobile</b></li>
                            <li><b>User Status</b></li>
                        </ul>
                    </div>
                    <div class="col-6 user_ul" id="data_to_add">
                        <!-- <ul>
                            <li>ID</li>
                            <li>First Name</li>
                            <li>Last Name</li>
                            <li>Username</li>
                            <li>Mobile</li>
                            <li>User Status</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="admin_heading_m mt-4">All Users</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>
            <div class="user_wrapper mt-4">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $obj = new Database();
                        $obj->Select('user', '*', null, null, 'user_id DESC', 5);
                        $result = $obj->show_output();
                        if ($result) {
                            foreach ($result[0] as $value) {
                        ?>
                                <tr>
                                    <td><?php echo $value['f_name']; ?> <?php echo $value['l_name']; ?></td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['mobile']; ?></td>
                                    <td class="btn_space"><button class="btn btn-primary btn-sm view_user" data-id="<?php echo $value['user_id']; ?>"><i class="fas fa-eye"></i></button>
                                    <?php 
                                    if($value['user_role'] == '1'){
                                        $block = "Block";
                                    }
                                    else{
                                        $block = "Unblock";
                                    }
                                    ?>
                                    <button class="btn btn-primary btn-sm user_block" data-id="<?php echo $value['user_id']; ?>"><?php echo $block; ?></button>
                                    <button class="btn btn-danger btn-sm delete_user" data-id="<?php echo $value['user_id']; ?>"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<h2>No users found!";
                        } ?>
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
                    echo $obj->pagination('user', null, null, 5);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>