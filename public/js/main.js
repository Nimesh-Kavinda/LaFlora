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
