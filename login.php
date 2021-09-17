  <?php include "./partials/header.php"; ?>

  <div class="container-fluid responsive" style="background-color: #EFF0F5;">

    <div class="container sign_up_contain">
      <div class="row">
        <div class="col-sm-6">
          <h4>Welcome to Daraz! Please login</h4>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          <p>New member <a href="#">Register Here</a></p>
        </div>
      </div>
    </div>




    <div class="container">

      <div class="card card_contain">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <form>
                <label>Phone Number or Email*</label><br>
                <input type="text" autocomplete="off" class="text" name="text" placeholder="Please Enter Phone Number or Email"><br>
                <label>Password*</label><br>
                <input class="pass" type="password" autocomplete="off" name="password" placeholder="Please Enter Password">
              </form>
              <div style="text-align: right;">
                <a href="#"><span>Forget Password</span></a>
              </div>
            </div>

            <div class="col-sm-6 ">
              <button style=" background-color:orange; height:40px; width:100%; color: white; border: 0;">Login</button><br>
              <a href="#"><span>or Login With</span></a><br><br>
              <button style=" background-color:#3B5998;height:40px; width:100%; color: white; border: 0; margin-bottom: 10px;">Facebook</button><br>
              <button style=" background-color:red;height:40px; width:100%; color: white; border: 0;">Gmail</button><br>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "./partials/footer.php"; ?>
