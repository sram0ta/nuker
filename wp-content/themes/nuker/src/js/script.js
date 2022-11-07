const images = document.querySelectorAll('.slider-line div');
const sliderLine = document.querySelector('.slider__line');
let count = 0;
let width;



document.querySelector('.btn__next').addEventListener('click', function () {
    count++;
    if (count >= images.length) {
        count = 0;
    }
    rollSlider();
});

document.querySelector('.btn__prev').addEventListener('click', function () {
    count--;
    if (count < 0) {
        count = images.length - 1;
    }
    rollSlider();
});

function rollSlider() {
    sliderLine.style.transform = 'translate(-' + count * width + 'px)';

}


