<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="admin_heading_m mt-4">Settings</h2>
            <div class="mt-3 admin_alert" id="admin_alert">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="m-0" class="text_to" id="text_to">Please Fill all the field!</p>
                    <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p>
                </div>
            </div>

            <div class="setting_form mt-3">
                <form action="" id="settings_handle">
                    <?php 
                    $obj = new Database();
                    $obj->Select('options','*');
                    $result = $obj->show_output();
                    if($result){
                        foreach ($result[0] as $value) {
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <div class="Name_site">
                                    <label for="site_name" class="form-label">Site Name</label>
                                    <input type="text" value="<?php echo $value['site_name']; ?>" name="site_name" id="site_name" class="form-control">
                                </div>
                                <div class="title_site mt-3">
                                    <label for="site_title" class="form-label">Site Title</label>
                                    <input type="text" value="<?php echo $value['site_title']; ?>" name="site_title" id="site_title" class="form-control">
                                </div>
                                <div class="desc_site mt-3">
                                    <label for="site_desc" class="form-label">Site Description</label>
                                    <input type="text" value="<?php echo $value['site_desc']; ?>" name="site_desc" id="site_desc" class="form-control">
                                </div>
                                <div class="email_site mt-3">
                                    <label for="site_email" class="form-label">Contact Email</label>
                                    <input type="text" value="<?php echo $value['contact_email']; ?>" name="site_email" id="site_email" class="form-control">
                                </div>
                                <div class="phone_site mt-3">
                                    <label for="site_phone" class="form-label">Contact Phone Number</label>
                                    <input type="text" value="<?php echo $value['contact_phone']; ?>" name="site_phone" id="site_phone" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <div class="logo_site mt-sm-0 mt-3">
                                    <label for="site_logo">Site Logo</label>
                                    <input type="file" class="form-control" name="site_logo" id="site_logo">
                                    <img src="../images/<?php echo $value['site_logo']; ?>" width="50" alt="">
                                </div>
                                <div class="text_footer mt-3">
                                    <label for="footer_text" class="form-label">Footer Text</label>
                                    <input type="text" value="<?php echo $value['footer_text']; ?>" name="footer_text" id="footer_text" class="form-control">
                                </div>
                                <div class="format_currency mt-3">
                                    <label for="currency_format" class="form-label">Currency Format</label>
                                    <input type="text" value="<?php echo $value['currency_format']; ?>" name="currency_format" id="currency_format" class="form-control">
                                </div>
                                <div class="contact_Address mt-3">
                                    <label for="contact_address" class="form-label">Contact Address</label>
                                    <textarea name="contact_address" id="site_address" class="form-control"><?php echo $value['contact_address']; ?></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="settings_id" value="<?php echo $value['s_no']; ?>">
                            <input type="hidden" name="logo_n" value="<?php echo $value['site_logo']; ?>">
                            <div class="d-flex justify-content-sm-end mt-4">
                                <button type="submit" class="btn btn_submit">Sumbit</button>
                            </div>
                        </div>
                    </div>
                    <?php } } else{ echo "Nothing to show!"; } ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>