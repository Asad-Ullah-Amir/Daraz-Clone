<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Admin/css/header.css">
    <link rel="stylesheet" href="./Admin/css/footer.css">
    <link rel="stylesheet" href="./Admin/css/all.min.css">
    <link rel="stylesheet" href="./Admin/css/index.css">
    <script src="./Admin/js/all.min.js"></script>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    footer {
        margin-top: auto;
    }
</style>

<body>


    <!-- Include Header -->
    <?php include "./partials/header.php"; ?>



    <!-- Main Body Part -->

    <!-- Carousal  -->
    <div class="carousal_slider">
        <div class="carousal_items" id="carousal_items">
            <div class="carousal_slide">
                <img src="./images/slide_1.jpg" alt="">
            </div>
            <div class="carousal_slide">
                <img src="./images/slide_2.jpg" alt="">
            </div>
            <div class="carousal_slide">
                <img src="./images/slide_3.jpg" alt="">
            </div>
            <div class="carousal_slide">
                <img src="./images/slide_4.png" alt="">
            </div>
            <div class="carousal_slide">
                <img src="./images/slide_5.jpg" alt="">
            </div>
        </div>


        <div class="indicators" id="indicators">
            <span class="indication bg_change"></span>
            <span class="indication"></span>
            <span class="indication"></span>
            <span class="indication"></span>
            <span class="indication"></span>
        </div>




        <div class="information ms-md-5">
            <ul style="list-style: none;">
                <li>Electronic Devices</li>
                <li>Electronic Accessories</li>
                <li>TV & Home Appliances</li>
                <li>Health & Beauty</li>
                <li>Babies & Toys</li>
                <li>Groceries & Pets</li>
                <li>Groceries & Pets</li>
                <li>Home & Lifestyle</li>
                <li>Women's Fashion</li>
                <li>Watches, Bags, Jewelery</li>
                <li>Sports & Outdoor</li>
            </ul>
        </div>
    </div>





<div style="height: 90vh;">

</div>





    <!-- Include Footer -->
    <?php include "./partials/footer.php"; ?>





    <script src="./Admin/js/index.js"></script>
</body>

</html>