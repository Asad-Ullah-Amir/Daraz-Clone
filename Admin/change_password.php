<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>

        <div class="col-md-9 ps-sm-4">
            <h2 class="mt-4 admin_heading_m">Change Password</h2>
            <div class="w-50 mt-4 pass_input">
                <div>
                    <label for="old_pass" class="form-label">Old Password</label>
                    <input type="password" name="old_pass" id="old_pass" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="new_pass" class="form-label">New Password</label>
                    <input type="password" name="new_pass" id="new_pass" class="form-control">
                </div>
            </div>
            <div class="d-flex justify-content-sm-start justify-content-end mt-4">
                <button type="submit" class="btn btn_submit">Sumbit</button>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>