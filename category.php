<?php include "./partials/header.php"; ?>

<!-- Category Name and Description -->
<div class="container-fluid px-md-3 mt-md-4 mt-2">
    <div class="jumbotron py-sm-5 py-4  px-4">
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <h1>Category Name</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda ullam perspiciatis nemo dolor illum architecto eaque eum tempore esse similique?</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-md-4 py-4">
    <div class="items_container px-2">
        <div class="row category_items px-3">
            <script>
                let cont = document.querySelector('.category_items');
                for (let i = 0; i < 13; i++) {
                    cont.innerHTML += `<div class="col-lg-2 col-sm-3 col-4 p-0 parent_hover">
                                        <div class="card mx-2">
                                            <img src="./images/card3.jpg" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <p class="card-title">
                                                    <a href="#" style="text-decoration:none; color:black;">Azam Sons special Door and...
                                                    </a>
                                                </p>
                                                <p class="card-text" style="color:#C58206;">
                                                    Rs.200
                                                </p>
                                            </div>
                                        </div>
                                        <div class="child_hover">
                                        <div class="center d-flex justify-content-center">
                                                <div>
                                                    <a href="#"><i class="fas fa-heart custom_icon"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#"><i class="fas fa-cart-plus custom_icon"></i></a>
                                                </div>
                                                </div>
                                    </div>
                                        </div>`;
                }
            </script>

        </div>
        <div class="load_more mt-4">
            <a href="#" class="btn btn-outline-primary b_t_n" style="width: 100%;">Load More</a>
        </div>
    </div>
</div>




<?php include "./partials/footer.php"; ?>