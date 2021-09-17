// IntersectionObserver Api 
// Sticking navbar 
let targt = document.querySelector('#to_hide');
let value = '-5px';
let options = {
    rootMargin: value
};
let observer = new IntersectionObserver(function (entries, observe) {
    entries.forEach(element => {
        let to_hide = document.querySelector('#Observe');
        let target = element.target;
        if (element.isIntersecting) {
            to_hide.classList.remove('fixed');

        }
        else {
            to_hide.classList.add('fixed');
        }
    });
}, options);
observer.observe(targt);

// Navbar Category 
let carousal_slider = document.querySelector('.carousal_slider');
if (carousal_slider) {

    let options1 = {
        rootMargin: '-80px'
    }
    let contain = document.querySelector('.contain');
    let observer1 = new IntersectionObserver(function (entires, observe) {
        entires.forEach(element => {
            if (element.isIntersecting) {
                contain.style.display = 'none';
            } else {
                contain.style.display = 'block';
            }
        })
    }, options1);
    observer1.observe(carousal_slider);
}





// Carousal Slider Code
if (document.querySelector('#carousal_items')) {

    let carousal_items = document.querySelector('#carousal_items').children;
    let indicators = document.querySelector('#indicators').children;
    let current = 0;
    setInterval(() => {
        for (let i = 0; i < carousal_items.length; i++) {
            carousal_items[i].style.opacity = 0;
            indicators[i].classList.remove('bg_change');
        }
        current = (current != carousal_items.length - 1) ? current + 1 : 0;
        carousal_items[current].style.opacity = '1';
        indicators[current].classList.add('bg_change');

    }, 5000);



    Array.from(indicators).forEach((element, index) => {
        element.addEventListener('mouseover', (e) => {
            for (let i = 0; i < carousal_items.length; i++) {
                carousal_items[i].style.opacity = 0;
                indicators[i].classList.remove('bg_change');
            }
            carousal_items[index].style.opacity = '1';
            indicators[index].classList.add('bg_change');
            current = index;
        })
    });






    // Timer in home page 
    let boxes = document.querySelector('#timer').querySelector('.ms-4').children;
    let box_arr = Array.from(boxes);
    let get_m = 'Sept';
    let get_d = '16';
    let get_y = '2021';
    let get_h = '23:00:00';
    let sale_time = new Date(`${get_m} ${get_d},${get_y} ${get_h}`).getTime();

    let x = setInterval(() => {
        let now = new Date().getTime();
        if (sale_time > now) {
            let distance = sale_time - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);
            box_arr[0].innerHTML = hours < 10 ? '0' + hours : hours;
            box_arr[1].innerHTML = minutes < 10 ? '0' + minutes : minutes;
            box_arr[2].innerHTML = seconds < 10 ? '0' + seconds : seconds;
        } else {
            clearInterval(x);
        }
    }, 1000);


}





// CountHanlder in product and cart page 
$(document).ready(function () {
    if($('.quantity_handle')){
        jQuery('<div class="quantity-nav"><button class="quantity-button quantity-up">+</button><button class="quantity-button quantity-down">-</button></div>').insertAfter('.quantity_handle input');
        jQuery('.quantity_handle').each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');
        
            btnUp.click(function () {
              var oldValue = parseFloat(input.val());
              if (oldValue >= max) {
                var newVal = oldValue;
              } else {
                var newVal = oldValue + 1;
              }
              spinner.find("input").val(newVal);
              spinner.find("input").trigger("change");
            });
        
            btnDown.click(function () {
              var oldValue = parseFloat(input.val());
              if (oldValue <= min) {
                var newVal = oldValue;
              } else {
                var newVal = oldValue - 1;
              }
              spinner.find("input").val(newVal);
              spinner.find("input").trigger("change");
            });
        
          });
    }
})