<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin_header.php">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="./css/admin_header.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css//products.css">
    <link rel="stylesheet" href="./css/categories.css">
    <link rel="stylesheet" href="./css/sub_categories.css">
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="./css/admin_footer.css">
    <link rel="stylesheet" href="./css/users.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container-fluid position-relative">
        <div class="main_header">
            <div class="row align-items-center ofheader">
                <div class="col-sm-7 col-5 m-2">
                    <div class="admin_header_logo">
                        <p class="m-0">DARAZ</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 d-flex align-items-center justify-content-end position-relative">
                    <p class="mb-0 mx-4 name" id="name">Hi,Asad! <i class="fas fa-chevron-circle-down name"></i></p>
                    <div class="Admin_settings" id="Admin_settings">
                        <ul>
                            <a href="change_password.php">
                                <li class="li_show">Change Password</li>
                            </a>
                            <a href="#">
                                <li class="li_show">Logout</li>
                            </a>
                        </ul>
                    </div>
                    <span id="humburger" class="d-md-none d-block"><i class="fas fa-hamburger text-white humburger"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden_menu">
        <ul>
            <a href="dashboard.php">
                <li>Dashboard</li>
            </a><a href="products.php">
                <li>products</li>
            </a><a href="categories.php">
                <li>categories</li>
            </a><a href="sub_categories.php">
                <li>sub-categories</li>
            </a><a href="#">
                <li>Brands</li>
            </a><a href="#">
                <li>orders</li>
            </a><a href="#">
                <li>users</li>
            </a><a href="#">
                <li>options</li>
            </a>
        </ul>
    </div>
</body>

</html>