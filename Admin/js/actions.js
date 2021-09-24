$(document).ready(function () {
    if (document.querySelector('#admin')) {
        $('#admin').submit(function (e) {
            e.preventDefault();
            let username = $('#username').val();
            let password = $('#password').val();
            if (username != "" && password != "") {
                let form = new FormData(e.target);
                form.append('admin', '1');
                fetch('files_handle/admin.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone/admin/dashboard.php";
                    }
                })
            }
            else {
                $('#admin_alert').fadeIn();
            }
        });
    }

    if (document.querySelector('#admin_cross')) {
        $('#admin_cross').click(function () {
            $('#admin_alert').fadeOut();
        })
    }


    // Admin Password change handle 
    if(document.querySelector('#chagne_password')){
        $('#chagne_password').submit(function (e) {  
            e.preventDefault();
            let form = new FormData(e.target);
            form.append('change_admin_pass','1');
            fetch('files_handle/admin.php',{
                method:'POST',
                body:form
            }).then(function (response) { 
                return response.json();
             }).then(function (data) {  
                 console.log(data);
                 $('#text_to').html(data.message);
                 $('#admin_alert').fadeIn();
                 if(data.status == true){
                     window.location.href = 'http://localhost/daraz-clone/admin/dashboard.php';
                 }
             }).catch(function (error) {  
                 console.log(error);
             })
        })
    }





    // Products operations 
    if (document.querySelector('#add_product')) {


        $('#add_product').submit(function (e) {
            e.preventDefault();
            let title = $('#product_title').val();
            let category = $('#product_category').val();
            let product_sub_category = $('#product_sub_category').val();
            let product_brand = $('#product_brand').val();
            let editor = $('#editor').val();
            // let product_image =$('#product_image').get(0).files.length;
            let product_price = $('#product_price').val();
            let available_quantity = $('#available_quantity').val();
            let status = $('#status').val();

            if (title != "" && editor != "" && product_price != "" && available_quantity != "" && document.querySelector('#product_image').files.length != 0) {
                let form = new FormData(e.target);
                if (status == "") {
                    form.set('status', 0);
                }
                form.append('add_product', '1');
                fetch('files_handle/products.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status === true) {
                        window.location.href = "http://localhost/daraz-clone/admin/products.php";
                    }
                }).catch(function (error) {
                    console.log(error);
                })

            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }





    // Product Delete hanlde 

    if (document.querySelectorAll('.delete_product')) {
        $('.delete_product').each(function () {
            $(this).click(function (e) {
                let id = $(this).attr('data-id');
                let img = $(this).attr('data-image');
                if (id != "") {
                    if (confirm('Are you sure you want to delete!')) {
                        let form = new FormData();
                        form.append('delete_id', id);
                        form.append('delete_image',img);
                        fetch('files_handle/products.php', {
                            method: 'POST',
                            body: form
                        }).then(function (response) {
                            return response.json();
                        }).then(function (data) {
                            if (data.status == true) {
                                window.location.reload();
                            }
                        }).catch(function (error) {
                            console.log(error);
                        })
                    }
                    else {
                        console.log('thank');
                    }
                }
                else {
                    console.log('some problem');
                }
            })
        })
    }




    if (document.querySelector('#edit_product')) {
        $('#edit_product').submit(function (e) {
            e.preventDefault();
            let title = $('#product_title').val();
            let category = $('#product_category').val();
            let product_sub_category = $('#product_sub_category').val();
            let product_brand = $('#product_brand').val();
            let editor = $('#editor').val();
            let product_price = $('#product_price').val();
            let available_quantity = $('#available_quantity').val();
            let status = $('#status').val();

            if (title != "" && editor != "" && product_price != "" && available_quantity != "") {
                let form = new FormData(e.target);
                if (status == "") {
                    form.set('status', 0);
                }
                form.append('edit_product', '1');
                fetch('files_handle/products.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status === true) {
                        window.location.href = "http://localhost/daraz-clone/admin/products.php";
                    }
                }).catch(function (error) {
                    console.log(error);
                })


            }
            else {
                $('#admin_alert').fadeIn();
            }

        })
    }





    // category opertions

    if (document.querySelector('#add_category')) {
        $('#add_category').submit(function (e) {
            e.preventDefault();
            let val = $('#add_cat').val();
            if (val != "") {
                let form = new FormData(e.target);
                form.append('add_cat', '1');
                fetch('files_handle/category.php', {
                    method: "POST",
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    console.log(data);
                    if (data.status === true) {
                        window.location.href = "http://localhost/daraz-clone/admin/categories.php";
                    }

                }).catch(function (error) {
                    console.log(error);
                })
                $('#admin_alert').fadeOut();
            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }



    if (document.querySelector('#edit_category')) {
        $('#edit_category').submit(function (e) {
            e.preventDefault();
            let val = $('#edit_cat').val();
            if (val != "") {
                let form = new FormData(e.target);
                form.append('check_id', '1');
                fetch('files_handle/category.php', {
                    method: "POST",
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    console.log(data);
                    if (data.status === true) {
                        window.location.href = "http://localhost/daraz-clone/admin/categories.php";
                    }

                }).catch(function (error) {
                    console.log(error);
                })
                $('#admin_alert').fadeOut();
            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }











    if (document.querySelectorAll('.delete_category')) {
        $('.delete_category').each(function () {
            $(this).click(function (e) {
                let id = $(this).attr('data-id');
                if (id != "") {
                    if (confirm('Are you sure you want to delete!')) {
                        let form = new FormData();
                        form.append('delete_cat', id);
                        fetch('files_handle/category.php', {
                            method: 'POST',
                            body: form
                        }).then(function (response) {
                            return response.json();
                        }).then(function (data) {
                            $('#text_to').html(data.message);
                            $('#admin_alert').fadeIn();
                            if (data.status == true) {
                                window.location.reload();
                            }
                        }).catch(function (error) {
                            console.log(error);
                        })
                    }
                    else {
                        console.log('thank');
                    }
                }
                else {
                    console.log('some problem');
                }
            })
        })
    }






    // Sub-Categories Operation 


    if (document.querySelector('#add_sub_categories')) {
        $('#add_sub_categories').submit(function (e) {
            e.preventDefault();
            let sc_val = $('#add_subCategory').val();
            if (sc_val != "") {
                let form = new FormData(e.target);
                form.append('add_sub_cat', '1');
                fetch('files_handle/sub_category.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone/admin/sub_categories.php";
                    }
                })
            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }




    if (document.querySelector('#edit_sub_categories')) {
        $('#edit_sub_categories').submit(function (e) {
            e.preventDefault();
            let sc_val = $('#edit_subCategory').val();
            if (sc_val != "") {
                let form = new FormData(e.target);
                form.append('edit_sub_cat', '1');
                fetch('files_handle/sub_category.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    console.log(data);
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone/admin/sub_categories.php";
                    }
                })
            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }






    if (document.querySelectorAll('.detele_sub_category')) {
        $('.detele_sub_category').each(function () {
            $(this).click(function (e) {
                let id = $(this).attr('data-id');
                if (id != "") {
                    if (confirm('Are you sure you want to delete!')) {
                        let form = new FormData();
                        form.append('delete_sub_cat', id);
                        fetch('files_handle/sub_category.php', {
                            method: 'POST',
                            body: form
                        }).then(function (response) {
                            return response.json();
                        }).then(function (data) {
                            if (data.status == true) {
                                window.location.reload();
                            }
                        }).catch(function (error) {
                            console.log(error);
                        })
                    }
                    else {
                        console.log('thank');
                    }
                }
                else {
                    console.log('some problem');
                }
            })
        })
    }



    // Sub Category show in menu 
    if(document.querySelectorAll('.check_subCategory')){
        $('.check_subCategory').each(function () {  
            $(this).click(function (e) {  
                let check = $(this).attr('checked');
                let id = $(this).attr('data-id');
                if(id != ""){
                    let form = new FormData();
                    form.append('subCat_check_id',id);
                    fetch('files_handle/sub_category.php',{
                        method:'POST',
                        body:form
                    }).then(function (response) {  
                        return response.json();
                    }).then(function (data) {  
                        console.log(data);
                    }).catch(function (error) {  
                        console.log(error);
                    })
                }
            })
        })
    }




    // Brands operations 

    if (document.querySelector('#add_brand')) {
        $('#add_brand').submit(function (e) {
            e.preventDefault();
            let brand_title = $('#add_title_brand').val();
            if (brand_title != "") {
                let form = new FormData(e.target);
                form.append('adding_brand', '1');
                fetch('files_handle/brands.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    console.log(data);
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone/admin/brands.php";
                    }
                }).catch(function (error) {
                    console.log(error);
                })
                $('#admin_alert').fadeOut();
            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }




    if (document.querySelector('#edit_brand')) {
        $('#edit_brand').submit(function (e) {
            e.preventDefault();
            let title = $('#edit_title_brand').val();
            if (title != "") {
                let form = new FormData(e.target);
                form.append('editing_brand', '1');
                fetch('files_handle/brands.php', {
                    method: 'POST',
                    body: form
                }).then(function (response) {
                    return response.json();
                }).then(function (data) {
                    console.log(data);
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if (data.status == true) {
                        window.location.href = "http://localhost/daraz-clone/admin/brands.php";
                    }
                }).catch(function (error) {
                    console.log(error);
                })

            }
            else {
                $('#admin_alert').fadeIn();
            }
        })
    }




    if (document.querySelectorAll('.brand_delete')) {
        $('.brand_delete').each(function () {
            $(this).click(function (e) {
                let id = $(this).attr('data-id');
                if (id != "") {
                    if (confirm('Are you sure you want to delete!')) {
                        let form = new FormData();
                        form.append('delete_brand_id', id);
                        fetch('files_handle/brands.php', {
                            method: 'POST',
                            body: form
                        }).then(function (response) {
                            return response.json();
                        }).then(function (data) {
                            if (data.status == true) {
                                window.location.reload();
                            }
                        }).catch(function (error) {
                            console.log(error);
                        })
                    }
                    else {
                        console.log('thank');
                    }
                }
                else {
                    console.log('some problem');
                }

            });
        });
    }




    // Users Operations 

    // View User 
    if (document.querySelectorAll('.view_user')) {
        $('.view_user').each(function () {
            $(this).click(function (e) {
                let id = $(this).attr('data-id');
                $('#user_popup').fadeIn();
                if (id != "") {
                    let form = new FormData();
                    form.append('user_id', id);
                    fetch('files_handle/user.php', {
                        method: "POST",
                        body: form
                    }).then(function (response) {
                        return response.json();
                    }).then(function (data) {
                        let html = `
                        <ul>
                            <li>${data.message.user_id}</li>
                            <li>${data.message.f_name}</li>
                            <li>${data.message.l_name}</li>
                            <li>${data.message.username}</li>
                            <li>${data.message.mobile}</li>
                            <li>${data.message.user_role}</li>
                        </ul>
                    `;
                        $('#data_to_add').html(html);
                    }).catch(function (error) {
                        console.log(error);
                    })
                }
            })
        })
    }
    if (document.querySelector('.user_view_close')) {
        $('.user_view_close').click(function (e) {
            $('#user_popup').fadeOut();
        })
    }

    document.onclick = function (e) {
        if (!e.target.classList.contains('popup_center') && !e.target.classList.contains('view_user') && !e.target.classList.contains('fa-eye') && !e.target.hasAttribute('fill') && !$(e.target).parents('.popup_center').hasClass('popup_center')) {
            $('#user_popup').fadeOut();

        }
    }



    // Block User 
    if(document.querySelectorAll('.user_block')){
        $('.user_block').each(function () {  
            $(this).click(function (e) {  
                let id = $(this).attr('data-id');
                if(id != ""){
                    let form = new FormData();
                    form.append('user_block_id',id);
                    fetch('files_handle/user.php',{
                        method:'POST',
                        body:form
                    }).then(function (response) {  
                        return response.json();
                    }).then(function (data) {  
                        console.log(data);
                        $('#text_to').html(data.message);
                        $('#admin_alert').fadeIn();
                        if(data.status == true){
                            window.location.reload();
                        }
                    }).catch(function (error) {  
                        console.log(error);
                    })
                }
            })
        })
    }




    // Delete User 

    if(document.querySelectorAll('.delete_user')){
        $('.delete_user').each(function () {  
            $(this).click(function (e) {  
                let id = $(this).attr('data-id');
                if(id != ""){
                    if(confirm('Are you sure you wanna delete this user!')){
                        let form = new FormData();
                        form.append('delete_user_id',id);
                        fetch('files_handle/user.php',{
                            method:"POST",
                            body:form
                        }).then(function (response) {  
                            return response.json();
                        }).then(function (data) {  
                            if(data.status == true){
                                window.location.reload();
                            }
                        }).catch(function (error) {  
                            console.log(error);
                        })
                    }
                }
            })
        })
    }







    // Settings 
    if(document.querySelector('#settings_handle')){
        $('#settings_handle').submit(function (e) {  
            e.preventDefault();
            let site_name = $('#site_name').val();
            let site_title = $('#site_title').val();
            let site_desc = $('#site_desc').val();
            let site_email = $('#site_email').val();
            let site_phone = $('#site_phone').val();
            let currency_format = $('#currency_format').val();
            let footer_text = $('#footer_text').val();
            let site_address = $('#site_address').val();
                
                let form = new FormData(e.target);
                form.append('settings_updation','1');
                fetch('files_handle/settings.php',{
                    method:"POST",
                    body:form
                }).then(function (response) {  
                    return response.json();
                }).then(function (data) {  
                    console.log(data);
                    $('#text_to').html(data.message);
                    $('#admin_alert').fadeIn();
                    if(data.status == true){
                        window.location.reload();
                    }
                }).catch(function (error) {  
                    console.log(error);
                })

        })
    }




});