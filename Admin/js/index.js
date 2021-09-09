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
