// Registration handle 
$(document).ready(function () {
    let url = 'php_files_handle/user_handle.php';
    if (document.querySelector('#signup')) {
        let signup = document.querySelector('#signup');
        signup.addEventListener('submit', (e) => {
            e.preventDefault();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let password = $('#password').val();
            let confirm_pass = $('#confirm_password').val();
            let f_name = $('#f_name').val();
            let l_name = $('#l_name').val();
            if (email != "" && phone != "" && password != "" && confirm_pass != "" && f_name != "" && l_name != "") {
                if (phone.length > 11) {
                    $('#phone').next().fadeIn();
                }
                else {
                    $('#phone').next().fadeOut();
                    let form = new FormData(e.target);
                    form.append('register', '1');
                    fetch(url, {
                        method: 'POST',
                        body: form
                    }).then(function (response) {
                        return response.json();
                    }).then(function (data) {
                        $('.information_contain').html(data.message);
                        $('.from_alert2').fadeIn();
                        if (data.status == true) {
                            window.location.href = "http://localhost/daraz-clone/login.php";
                        }
                    }).catch(function (error) {
                        console.log(error);
                    })
                }
            }
            else {
                $(".from_alert2").fadeIn();
            }

        });
    }
    if (document.querySelector('#close_sign')) {

        $('#close_sign').click(function (e) {
            $('.from_alert2').fadeOut();
        });
    }






    // Login handle 
    if (document.querySelector('#login')) {
        let login = document.querySelector('#login');
        login.addEventListener('submit', (e) => {
            e.preventDefault();
            let email = $('#login_email').val();
            let password = $('#login_pass').val();
            if (email != "" && password != "") {
                let form = new FormData(e.target);
                form.append('login', '1');
                fetch(url, {
                    method: "POST",
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('.information_contain').html(data.message);
                    $('.from_alert2').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone";
                    }
                }).catch(function (error) { console.log(error); })
            }
            else {
                $('.from_alert2').fadeIn();
            }
        })
    }






    // Add to Cart Handle 
    if (document.querySelectorAll('.add_cart')) {
        // $('.add_cart').each(function () {
            $('body').on('click','.add_cart',function (e) {
                let id = $(this).attr('data-id');
                let form = new FormData();
                form.append('cart_product_id', id)
                fetch(url, {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    console.log(data);
                    if(data.status == false){
                        window.location.href = "http://localhost/daraz-clone//login.php";
                    }
                    if(data.status == true){
                        window.location.reload();
                    }
                }).catch(function (error) {
                    console.log(error);
                })
            // })
        })
    }



    // Delete Cart Handle 
    if(document.querySelectorAll('.delete_cart')){
        $('.delete_cart').each(function () {  
            $(this).click(function (e) {  
                let id = $(this).attr('data-id');
                let form = new FormData();
                form.append('delete_cart',id);
                fetch(url,{
                    method:'POST',
                    body:form
                }).then(function (response) {  
                    return response.json();
                }).then(function (data) {  
                    console.log(data);
                    if(data.status == true){
                        window.location.reload();
                    }
                }).catch(function (error) {  
                    console.log(error);
                })
            })
        })
    }



    // Whishlist Handle  
    if(document.querySelectorAll('.add_whishlist')){
        // $('.add_whishlist').each(function () {  
            $('body').on('click','.add_whishlist',function (e) {  
                let id = $(this).attr('data-id');
                let form = new FormData();
                form.append('wishlist_id',id);
                fetch(url,{
                    method:'POST',
                    body:form
                }).then(function (response) {  
                    return response.json();
                }).then(function (data) {  
                    console.log(data);
                    if(data.status == false){
                        window.location.href = "http://localhost/daraz-clone//login.php";
                    }
                    if(data.status == true){
                        window.location.reload();
                    }
                }).catch(function (error) {  
                    console.log(error);
                })
            })
        // })
    }




    // Delete Wish Handle 
    if(document.querySelectorAll('.delete_wish')){
        $('.delete_wish').each(function () {  
            $(this).click(function (e) {  
                let id = $(this).attr('data-id');
                let form = new FormData();
                form.append('delete_wish',id);
                fetch(url,{
                    method:'POST',
                    body:form
                }).then(function (response) {  
                    return response.json();
                }).then(function (data) {  
                    console.log(data);
                    if(data.status == true){
                        window.location.reload();
                    }
                }).catch(function (error) {  
                    console.log(error);
                })
            })
        })
    }




    if(document.querySelector('#search_query')){
        $('#search_query').submit(function (e) {  
            e.preventDefault();
            let val = $('#search').val();
            if(val != ""){
                $(this).unbind('submit').submit();
            }else{
                console.log('nothing gonna happen');
            }
        })
    }





    // Load More 
    if(document.querySelectorAll('.load_more_btn')){
        $('.load_more_btn').each(function () {  
            $(this).click(function (e) {  
                let form = new FormData();
                let p = Array.from(document.querySelectorAll('.count_number > div.parent_hover'));
                let offset = p.length;
                let limit = $(this).attr('data-id');
                if($(this).attr('data-catid')){
                    let cat_id = $(this).attr('data-catid');
                    form.append('cat_id',cat_id);
                }
                else if($(this).attr('data-subcatid')){
                    let sub_catid = $(this).attr('data-subcatid');
                    form.append('subcat_id',sub_catid);
                }
                form.append('offset',offset);
                form.append('limit',limit);
                fetch(url,{
                    method:"POST",
                    body:form
                }).then(function (response) {  
                    return response.json();
                }).then(function (data) {  
                    $('.count_number').append(data.message);
                    if(data.message.length == '0'){
                        $('.load_more_btn').hide();
                    }
                }).catch(function (error) {  
                    console.log(error);
                })
            })
        })
    }

});