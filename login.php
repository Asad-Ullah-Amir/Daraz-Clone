  <?php include "./partials/header.php"; ?>

  <div class="container-fluid responsive" style="background-color: #EFF0F5;">

    <div class="container sign_up_contain">
      <div class="row">
        <div class="col-sm-6">
          <h4>Welcome to Daraz! Please login</h4>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          <p>New member <a href="signup.php">Register Here</a></p>
        </div>
      </div>
    </div>




    <div class="container">

      <form method="POST" action="" id="login">
        <div class="card card_contain">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <label>Phone Number or Email*</label><br>
                <input type="email" autocomplete="off" id="login_email" class="text" name="login_email" placeholder="Please Enter Phone Number or Email"><br>
                <label>Password*</label><br>
                <input class="pass to_show_inp" type="password" id="login_pass" autocomplete="off" name="login_password" placeholder="Please Enter Password">
                <div class="mt-2">
                  <input type="checkbox" class="show_pass">
                  <span class="ms-1">Show Password</span>
                </div>
                <div style="text-align: right;">
                  <a href="#"><span>Forget Password</span></a>
                </div>
              </div>

              <div class="col-sm-6 ">
                <button type="submit" style=" background-color:orange; height:40px; width:100%; color: white; border: 0;">Login</button><br>
                <a href="#"><span>or Login With</span></a><br><br>
                <button style=" background-color:#3B5998;height:40px; width:100%; color: white; border: 0; margin-bottom: 10px;">Facebook</button><br>
                <button style=" background-color:red;height:40px; width:100%; color: white; border: 0;">Gmail</button><br>
              </div>

            </div>
          </div>
        </div>
      </form>
      <div class="from_alert2">
        <div class='form_alert bg-white d-flex justify-content-between align-items-center'>
          <p class="m-0 information_contain">Please Fill all the fields!</p>
          <p class="m-0" id="close_sign"><i class="far fa-window-close close_sign"></i></p>
        </div>
      </div>
    </div>
  </div>

  <?php include "./partials/footer.php"; ?>