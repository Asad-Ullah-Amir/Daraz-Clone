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




        <div class="information ms-md-5 d-sm-block d-none">
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
    <!-- Carousal End -->


    <!-- Main Content Part -->
    <!-- Sectin 1 fashion menu  -->
    <section class="section_1">
        <div class="container-fluid px-md-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="fashion_menu">
                        <img src="./images/f1.png" alt="">
                        <i class="fas fa-angle-right right_arrow"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-1">
                    <div class="fashion_menu">
                        <img src="./images/f2.gif" alt="">
                        <i class="fas fa-angle-right right_arrow"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-1">
                    <div class="fashion_menu">
                        <img src="./images/f3.png" alt="">
                        <i class="fas fa-angle-right right_arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sectin 1 fashion menu end -->


    <!-- Section 2 Sale section -->
    <section class="section_2">
        <div class="container-fluid py-2">
            <div class="d-flex justify-content-between">
                <h3>Flash Sale</h3>
                <a href="#" class="d-md-none  d-block">SHOP MORE</a>
            </div>

            <div class="row row_1 pt-3 pb-2 align-items-baseline">
                <div class="col-md-2 col-sm-4 d-sm-block d-none d-flex align-items-center text-primary">On Sale Now</div>
                <div class="col-md-6 col-sm-8 d-flex justify-content-center align-items-center c_color pt-sm-0 pt-3" id="timer">
                    <div class="d-flex align-items-baseline">

                        <p>Ending in</p>
                        <div class="ms-4">
                            <span class="time_box">10</span>
                            <span class="time_box">10</span>
                            <span class="time_box">10</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-md-block d-none text-end">
                    <button class="btn btn_custom d-md-block d-none">SHOP MORE</button>
                </div>
            </div>
            <div class="row row_2 dynamic">
            </div>
        </div>
    </section>


    <!-- Collection Section -->
    <section class="section_3">
        <div class="d-flex justify-content-between px-1 align-items-center">
            <h3>Collections</h3>
            <a href="#" style="text-decoration: none;">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a>
        </div>
        <div class="container-fluid">
            <div class="items_contains row scroll_handle">
                <div class="col-3 bord bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 bord_right">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-3 ">
                    <a href="#" class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                        <div class="collection_content d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                            <span>Crafting Love></span>
                            <span class="text-muted">88 Products</span>
                        </div>
                        <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                            <img src="./images/coll1.jpg" alt="">
                            <img src="./images/coll2.jpg" alt="">
                            <img src="./images/coll3.jpg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Collection Section End  -->


    <!-- Categories Section -->
    <section class="section_4">
        <div class="d-flex justify-content-between px-1">
            <h3>Categories</h3>
            <a href="#">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a>
        </div>
        <div class="container-fluid">
            <div class="row p-0 scroll_handle">
                <div class="col-2 p-0 bord bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat1.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat2.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat8.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat2.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat7.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat4.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat1.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat6.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat5.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat2.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0 bord_right">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat7.jpg" style="width:50px" alt="">
                            <p>Sporst EBook</p>
                        </div>
                    </a>
                </div>
                <div class="col-2 p-0">
                    <a href="#" style="text-decoration: none; color:black;">
                        <div style="width: 100%;" class="d-flex flex-column align-items-center">
                            <img src="./images/cat5.jpg" style="width:50px" alt="">
                            <p>Lens</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- For You Section -->
    <section class="section_5">
        <div class="d-flex justify-content-between">
            <h3>Just For You</h3>
            <a href="#">SHOP MORE <i class="fas fa-angle-right right_arrow"></i></a>
        </div>
        <div class="container-fluid">
            <div class="row dynamic" id="dynamic_2">

            </div>
        </div>
    </section>


    <!-- Include Footer -->
    <?php include "./partials/footer.php"; ?>





    <script src="./Admin/js/index.js"></script>
    <script src="./Admin/js/bootstrap.bundle.min.js"></script>
    <script>
        let boxes = document.querySelector('#timer').querySelector('.ms-4').children;
        let box_arr = Array.from(boxes);
        let get_m = 'Sept';
        let get_d = '5';
        let get_y = '2021';
        let get_h = '23:00:00';
        let sale_time = new Date(`${get_m} ${get_d},${get_y} ${get_h}`).getTime();
        console.log(sale_time);

        setInterval(() => {
            let now = new Date().getTime();
            if (sale_time > now) {
                let distance = sale_time - now;
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                box_arr[0].innerHTML = hours < 10 ? '0' + hours : hours;
                box_arr[1].innerHTML = minutes < 10 ? '0' + minutes : minutes;
                box_arr[2].innerHTML = seconds < 10 ? '0' + seconds : seconds;
            } else {
                console.log('problem');
            }
        }, 1000);
        console.log(50 % 150);


        let row = document.querySelector('.row_2');
            for (let i = 0; i < 6; i++) {
                row.innerHTML += `<div class="col-lg-2 col-md-3 col-sm-4 col-6 ">
            <a href="#" style="text-decoration:none; color:black;">
                    <div class="card mx-2">
                        <img src="./images/card${i+1}.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-title">
                               Azam Sons special Door and... 
                            </p>
                            <p class="card-text" style="color:#C58206; font-size:1.1rem">
                            Rs.200
                            </p>
                        </div>
                    </div>
                    <a/></div>`;
            }

        let dynamic_2 = document.querySelector('#dynamic_2');
        for (let i = 0; i < 12; i++) {
            console.log('woow');
            dynamic_2.innerHTML += `<div class="col-lg-2">
            <a href="#" style="text-decoration:none; color:black;">
                    <div class="card mx-2">
                        <img src="./images/${i<6?'card'+(i+1)+'.jpg':'cat2.jpg'}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-title">
                            Azam Sons special Door and... 
                            </p>
                            <p class="card-text" style="color:#C58206; font-size:1.1rem">
                            Rs.200
                            </p>
                            </div>
                            </div>
                            <a/></div>`;
        }
    </script>
</body>

</html>