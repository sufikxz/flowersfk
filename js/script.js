let slides = document.querySelectorAll('.slide');
let prevBtn = document.querySelector('.prev');
let nextBtn = document.querySelector('.next');
let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.style.display = 'none';
  });
  for (let i = index; i < index + 3; i++) {
    if (i < slides.length) {
      slides[i].style.display = 'block';
    }
  }
}

prevBtn.addEventListener('click', () => {
  currentIndex = currentIndex - 3;
  if (currentIndex < 0) {
    currentIndex = slides.length - 3;
  }
  showSlide(currentIndex);
});

nextBtn.addEventListener('click', () => {
  currentIndex = currentIndex + 3;
  if (currentIndex >= slides.length) {
    currentIndex = 0;
  }
  showSlide(currentIndex);
});

// Изначально показываем первые 3 слайда
showSlide(0);


/* Скролл элемент */
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}