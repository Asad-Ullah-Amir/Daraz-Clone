if(document.querySelector('.show_pass') && document.querySelectorAll('.to_show_inp')){
    let pass_show = document.querySelector('.show_pass');   
    let to_show_inp = document.querySelectorAll('.to_show_inp');

    $('.show_pass').click(function (e) {  
        $('.to_show_inp').each(function () {  
            if(this.type === 'password'){
                this.type = 'text';
            }
            else{// if(this.type = 'text'){
                this.type = 'password';
            }
           
        })
    })
}

console.log('skldj');