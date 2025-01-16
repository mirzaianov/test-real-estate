const slides = document.querySelector('.hero__slides');
const indicators = document.querySelectorAll('.hero__indicator');

let currentIndex = 0;
const totalSlides = slides.children.length - 1;
const firstSlide = slides.children[0];
const firstSlideWidth = firstSlide.offsetWidth;

function updateSlider(index, useTransition = true) {
  if (useTransition) {
    slides.style.transition = 'transform 1s ease-in-out';
  } else {
    slides.style.transition = 'none';
  }

  slides.style.transform = `translateX(-${index * firstSlideWidth}px)`;

  indicators.forEach((indicator, i) => {
    indicator.classList.toggle(
      'hero__indicator--active',
      i === index % totalSlides,
    );
  });
}

function slideToNext() {
  currentIndex += 1;
  updateSlider(currentIndex);

  if (currentIndex === totalSlides) {
    setTimeout(() => {
      currentIndex = 0;
      updateSlider(currentIndex, false);
    }, 1000);
  }
}

function startInterval() {
  return setInterval(slideToNext, 5000);
}

let slideInterval = startInterval();

slides.addEventListener('transitionend', () => {
  if (currentIndex === totalSlides) {
    currentIndex = 0;
    updateSlider(currentIndex, false);
  }
});

indicators.forEach((indicator, i) => {
  indicator.addEventListener('click', () => {
    currentIndex = i;
    updateSlider(currentIndex);
    clearInterval(slideInterval);
    slideInterval = startInterval();
  });
});
