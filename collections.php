<?php include "./partials/header.php"; ?>


<!-- All Collections -->
<section class="collection_section">

    <div class="container-fluid">
        <div class="row gy-md-4 gy-2" id="collections">
            <script>
                let coll = document.querySelector('#collections');
                for (let i = 0; i < 12; i++) {
                    coll.innerHTML += `<div class="col-sm-4 col_4 col-6">
                <a href="#" style="background-color: white;"class="d-flex flex-md-column align-items-center justify-content-center flex-column-reverse">
                    <div class="collection_content mb-md-5 mt-md-0 mt-4 d-flex flex-column mb-md-2 align-items-center" style="width:100%">
                        <span>Crafting Love></span>
                        <span class="text-muted">88 Products</span>
                    </div>
                    <div class="collection_images d-flex flex-row align-items-baseline justify-content-around ps-4" style="width:100%">
                        <img src="./images/coll1.jpg" alt="">
                        <img src="./images/coll2.jpg" alt="">
                        <img src="./images/coll3.jpg" alt="">
                    </div>
                </a>
            </div>`
                }
            </script>
        </div>
        
        <div class="load_more mt-4">
            <a href="#" class="btn btn-outline-primary b_t_n" style="width: 100%;">Load More</a>
        </div>
    </div>

</section>

<?php include "./partials/footer.php"; ?>