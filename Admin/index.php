<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin_index.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/all.min.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="center">
            <div class="row flex-row-reverse">
                <div class="col-6 d-lg-block d-none login_left">
                </div>
                <div class="col-lg-6 login_right">
                    <form action="" id="admin">
                        <h1 class="text-center mt-5">Log In</h1>
                        <div class="input_text mt-5">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="" name="username" id="username" autocomplete="off" placeholder="Username">
                        </div>
                        <div class="input_pass mt-3">
                            <i class="fas fa-unlock-alt icon"></i>
                            <input type="password" name="password" id="password" autocomplete="off" placeholder="Password">
                        </div>
                        <div class="submit_btns justify-content-around px-sm-5 mt-sm-5">
                            <a href="#">Forgot Password?</a>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3 admin_alert" id="admin_alert"><div class="d-flex justify-content-between align-items-center"><p class="m-0" class="text_to" id="text_to">Please Fill all the fields!</p> <p class="m-0" id="admin_cross"><i class="fas fa-window-close" style="cursor: pointer;"> </i></p></div></div>
        </div>
    </div>

    <script src="./js/actions.js"></script>
</body>

</html>