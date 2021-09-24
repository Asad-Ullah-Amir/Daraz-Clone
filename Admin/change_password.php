<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="mt-4 admin_heading_m">Change Password</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>
            <form action="" id="chagne_password">
                <div class="w-50 mt-4 pass_input">
                    <?php 
                    $obj = new Database();
                    $obj->Select('admin','admin_id');
                    $result = $obj->show_output();
                    if($result){
                        $ad_id = $result[0][0]['admin_id'];
                    }
                    ?>
                    <input type="hidden" name="ad_id" value="<?php echo $ad_id; ?>">
                    <div> 
                        <label for="old_pass" class="form-label">Old Password</label>
                        <input type="password" name="old_pass" id="old_pass" class="form-control to_show_inp">
                    </div>
                    <div class="mt-3">
                        <label for="new_pass" class="form-label">New Password</label>
                        <input type="password" name="new_pass" id="new_pass" class="form-control to_show_inp">
                    </div>
                </div>
                <div class="mt-2">
                <input type="checkbox" class="show_pass">
                <span class="">Show Password</span>
                </div>
                <div class="d-flex justify-content-sm-start justify-content-end mt-4">
                    <button type="submit" class="btn btn_submit">Sumbit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>