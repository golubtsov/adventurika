function flag_localstorage(){
    localStorage.podcatalog = 'all';
    if(localStorage.basket == undefined){
        localStorage.basket = JSON.stringify([]);
    }
}
flag_localstorage();

// СЛАЙДЕР

const line_slider = document.querySelector('.blc-slider-line');
console.log(line_slider.style.border);