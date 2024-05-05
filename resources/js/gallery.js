const images = document.querySelectorAll('.slider .slider-line img');

const cliderLine = document.querySelector('.slider-line');

let count = 0;
let width;

function init() {
    console.log('resize');
    width = document.querySelector('.slider').offsetWidth;
    cliderLine.style.width = width * images.length + 'px';
    images.forEach(item => {
        item.style.width = width + 'px';
        item.style.height = 'auto';
    });
}

init();