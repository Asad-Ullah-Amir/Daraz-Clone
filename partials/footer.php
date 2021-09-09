    <footer>
        <div class="container-fluid">
            <div class="row pt-4">
                <div class="col-md-3 col-6 first_footer_sec ps-md-4">
                    <h3 class="mb-2">Customer Care</h3>
                    <p>Help Center</p>
                    <p>How to buy</p>
                    <p>Corporate & Bulk purchasing</p>
                    <p>Returns & Refunds</p>
                    <p>Daraz Shop</p>
                    <p>Contact us</p>
                    <p>Purchase protection</p>
                    <p>Daraz Pick up Points</p>
                    <p>Fulfilled by Daraz(FBD)</p>
                    <h3>Make Money With Us</h3>
                    <p>Daraz University</p>
                    <p>Sell on Daraz</p>
                    <p>Join Daraz Affiliate Program</p>
                </div>
                <div class="col-md-3 col-6 second_footer_sec d-flex flex-column justify-content-center ps-5">
                    <h3>Daraz</h3>
                    <p>About us</p>
                    <p>Digital Payment</p>
                    <p>Daraz Cares</p>
                    <p>Daraz Blog</p>
                    <p>Terms & Conditions</p>
                    <p>Privay Policy</p>
                    <p>NTN Number: 4012118-6</p>
                    <p>Online Shopping App</p>
                    <p>Online Grocery Shop</p>
                    <p>Daraz Exclusive</p>
                </div>
                <div class="col-md-6 pt-3">
                    <div class="row">
                        <div class="col-12 first_img_part d-flex">
                            <img src="./images/barcode.png" class="border rounded" height="120px" alt="">
                            <div class="ms-2 line pt-4">
                                <img src="./images/1.png" style="margin-bottom: 1rem;" height="40px" alt="">
                                <p>Happy Shopping</p>
                                <p>Download App</p>
                            </div>
                        </div>
                        <div class="col-12 second_img_part">
                            <img src="./images/google.png" height="70px" alt="">
                            <img src="./images/apple.png" height="47px" alt="">
                            <img src="./images/hua.png" height="45px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./Admin/js/all.min.js"></script>
    <script src="./Admin/js/bootstrap.bundle.min.js"></script>
    <script>
        let boxes = document.querySelector('#timer').querySelector('.ms-4').children;
        let box_arr = Array.from(boxes);
        let get_m = 'Sept';
        let get_d = '8';
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
    </script>
<script src="./Admin/js/index.js"></script>
</body>
</html>