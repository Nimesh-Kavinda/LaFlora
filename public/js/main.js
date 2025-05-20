// main.js - Custom JS for LaFlora

document.addEventListener('DOMContentLoaded', function() {
  // Example: Smooth scroll for nav links
  document.querySelectorAll('a.nav-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (this.hash) {
        e.preventDefault();
        document.querySelector(this.hash).scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});

// Image Slider for About Section
(function() {
  const slider = document.getElementById('about-image-slider');
  if (!slider) return;
  const slides = slider.querySelectorAll('.image-slider-slide');
  const dots = slider.querySelectorAll('.image-slider-dot');
  let current = 0;
  let interval = null;

  function showSlide(idx) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === idx);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === idx);
    });
    current = idx;
  }

  function nextSlide() {
    showSlide((current + 1) % slides.length);
  }

  dots.forEach(dot => {
    dot.addEventListener('click', function() {
      showSlide(Number(this.dataset.slide));
      resetInterval();
    });
  });

  function resetInterval() {
    if (interval) clearInterval(interval);
    interval = setInterval(nextSlide, 3500);
  }

  resetInterval();
})();
