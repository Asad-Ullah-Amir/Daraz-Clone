<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- CSS only -->
  <link rel="stylesheet" href="./Admin/css/all.min.css">
  <link rel="stylesheet" href="./Admin/css/signup.css">
  <link rel="stylesheet" href="./Admin/css/login.css">
  <link rel="stylesheet" href="./Admin/css/header.css">
  <link rel="stylesheet" href="./Admin/css/footer.css">
  <link rel="stylesheet" href="./Admin/css/bootstrap.min.css">




</head>

<body>
  <?php include "./partials/header.php"; ?>

  <div class="container-fluid responsive" style="background-color: #EFF0F5;">

    <div class="container sign_up_contain">
      <div class="row">
        <div class="col-sm-6">
          <h4>Create Your Daraz Account</h4>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          <p>Already member <a href="login.php">Login Here</a></p>
        </div>
      </div>
    </div>




    <div class="container-fluid">
      <div class="card card_contain">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <form method="POST" action="" id="signup">
                <label>Enter your Email Address*</label><br>
                <input type="email" name="user_email" class="text1" id="email" autocomplete="off" placeholder="Please Enter your Email" ><br>
                <label>Enter your Phone*</label><br>
                <input type="number" name="user_phone" class="text1" id="phone" autocomplete="off" placeholder="Please Enter your Phone" maxlength="11"><div class="form-text position-relative" style="top: -10px;">Maximun length must be 11</div>
                <label>Enter your Password*</label><br>
                <input type="password" class="pass1 to_show_inp" id="password" autocomplete="off" name="user_password" placeholder="Please Enter Password" >
                <label>Confirm Password*</label><br>
                <input type="password" autocomplete="off" class="pass1 to_show_inp" id="confirm_password" name="user_c_password" placeholder="Please Enter Password" >
                <div class="mt-2">
                      <input type="checkbox" class="show_pass">
                      <span class="ms-1">Show Password</span>
                    </div>
            </div>

            <div class="col-sm-6 ">
              <label>First Name</label><br>
              <input type="text" name="user_fname" class="text1" id="f_name" placeholder="Enter your full Name" maxlength="20" >
              <label>Last Name</label><br>
              <input type="text" name="user_lname" class="text1" id="l_name" placeholder="Enter your full Name" maxlength="20" >
              <button type="submit" style=" background-color:orange; height:40px; width:100%; color: white; border: 0;">Sign up</button><br>
              <a href="#"><span>or Signup With</span></a><br><br>
              <button style=" background-color:#3B5998;height:40px; width:100%; color: white; border: 0; margin-bottom: 10px;">Facebook</button><br>
              <button style=" background-color:red;height:40px; width:100%; color: white; border: 0;">Gmail</button><br>
            </div>

            </form>
          </div>
        </div>
      </div>
     <div class="from_alert2">
     <div class='form_alert bg-white d-flex justify-content-between align-items-center'><p class="m-0 information_contain">Please Fill all the fields!</p><p class="m-0" id="close_sign"><i class="far fa-window-close close_sign"></i></p></div>
     </div>
    </div>
  </div>

  <?php include "./partials/footer.php"; ?>


  <script src="./Admin/js/all.min.js"></script>
</body>

</html>