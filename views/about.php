<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - LaFlora</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts for Logo -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- Google Fonts for body and headings -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<!-- Navbar (copied from index.html, do not change) -->
<?php include_once('../includes/nav.php'); ?>

<section class="about-hero-section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h1 class="about-title mb-3">About LaFlora</h1>
        <p class="about-desc mb-4">
          Welcome to LaFlora, your premier destination for exquisite floral arrangements and heartfelt gifting. Founded with a passion for spreading joy and beauty, LaFlora has blossomed into a trusted name for online flower delivery. Our journey began with a simple belief: every occasion deserves to be celebrated with the freshest, most vibrant blooms.<br><br>
          At LaFlora, we source our flowers directly from sustainable farms, ensuring every bouquet is bursting with color, fragrance, and life. Our talented florists handcraft each arrangement with meticulous attention to detail, blending creativity and care to make every order unique. Whether you’re celebrating a birthday, anniversary, wedding, or simply want to brighten someone’s day, we have the perfect bouquet for you.<br><br>
          We are committed to eco-friendly practices, using recyclable packaging and supporting local growers. Our same-day delivery service ensures your flowers arrive fresh and on time, every time. With a focus on customer satisfaction, we go the extra mile to make your experience seamless and memorable. Discover the LaFlora difference—where every petal tells a story of love, joy, and connection.
        </p>
        <ul class="about-features list-unstyled mb-4">
          <li><i class="fa-solid fa-truck-fast me-2" style="color:var(--laflora-secondary)"></i>Same-day & scheduled delivery</li>
          <li><i class="fa-solid fa-leaf me-2" style="color:var(--laflora-secondary)"></i>Eco-friendly, recyclable packaging</li>
          <li><i class="fa-solid fa-award me-2" style="color:var(--laflora-secondary)"></i>100% freshness & satisfaction guarantee</li>
          <li><i class="fa-solid fa-people-group me-2" style="color:var(--laflora-secondary)"></i>Family-owned, community-focused</li>
          <li><i class="fa-solid fa-gift me-2" style="color:var(--laflora-secondary)"></i>Custom bouquets & gift combos</li>
        </ul>
        <a href="../index.html#products" class="btn btn-laflora btn-lg">Shop Our Flowers</a>
      </div>
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="about-img-wrapper about-img-single-wrapper w-100">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=80" alt="LaFlora Flowers" class="about-img about-img-animate about-img-single">
        </div>
      </div>
    </div>
    <div class="row mt-5 g-4">
      <div class="col-md-4">
        <div class="about-highlight-card text-center p-4 h-100">
          <i class="fa-solid fa-seedling fa-2x mb-3" style="color:var(--laflora-primary)"></i>
          <h5 class="mb-2">Sustainably Sourced</h5>
          <p class="mb-0">We partner with local farmers and use eco-friendly packaging to protect the planet with every delivery.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-highlight-card text-center p-4 h-100">
          <i class="fa-solid fa-heart fa-2x mb-3" style="color:var(--laflora-primary)"></i>
          <h5 class="mb-2">Handcrafted With Love</h5>
          <p class="mb-0">Our florists pour creativity and care into every bouquet, making each arrangement truly special.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-highlight-card text-center p-4 h-100">
          <i class="fa-solid fa-gift fa-2x mb-3" style="color:var(--laflora-primary)"></i>
          <h5 class="mb-2">Perfect for Every Occasion</h5>
          <p class="mb-0">From birthdays to weddings, we offer custom bouquets and gifts to make every moment memorable.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 testimonial-title">What Our Customers Say</h2>
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <div class="testimonial-card p-4 h-100 text-center">
          <p class="testimonial-text">“Absolutely stunning bouquets! The flowers were fresh and beautifully arranged. Delivery was super fast. Highly recommend LaFlora!”</p>
          <div class="testimonial-name">— Priya S.</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card p-4 h-100 text-center">
          <p class="testimonial-text">“LaFlora made my anniversary extra special. The eco-friendly packaging and the freshness of the flowers were impressive!”</p>
          <div class="testimonial-name">— Arjun M.</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card p-4 h-100 text-center">
          <p class="testimonial-text">“Great service and beautiful flowers every time. I love supporting a local, family-owned business!”</p>
          <div class="testimonial-name">— Kavya R.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer (copied from index.html, do not change) -->
<?php include_once('../includes/footer.php'); ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="../public/js/main.js"></script>
</body>
</html>
