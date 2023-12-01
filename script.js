const prevBtn = document.querySelector('.prevBtn');
const nextBtn = document.querySelector('.nextBtn');
const slides = document.querySelector('.slides');
const slideWidth = document.querySelector('.slider').offsetWidth;

let slideIndex = 0;

prevBtn.addEventListener('click', () => {
    slideIndex = (slideIndex === 0) ? slides.childElementCount - 1 : slideIndex - 1;
    updateSlidePosition();
});

nextBtn.addEventListener('click', () => {
    slideIndex = (slideIndex === slides.childElementCount - 1) ? 0 : slideIndex + 1;
    updateSlidePosition();
});

function updateSlidePosition() {
    slides.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
}