// Registration handle 
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
if(document.querySelector('#close_sign')){

    $('#close_sign').click(function (e) {
        $('.from_alert2').fadeOut();
    });
}
    





// Login handle 
if(document.querySelector('#login')){
    let login = document.querySelector('#login');
    login.addEventListener('submit',(e)=>{
        e.preventDefault();
        let email = $('#login_email').val();
        let password = $('#login_pass').val();
        if(email != "" && password != ""){
            let form = new FormData(e.target);
            form.append('login','1');
            fetch(url,{
                method:"POST",
                body:form
            }).then(function(response){
                return response.json();
            }).then(function(data){
                $('.information_contain').html(data.message);
                $('.from_alert2').fadeIn();
                if (data.status == true) {
                    window.location.href = "http://localhost/daraz-clone";
                }
            }).catch(function (error) { console.log(error); })
        }
        else{
            $('.from_alert2').fadeIn();
        }
    })
}