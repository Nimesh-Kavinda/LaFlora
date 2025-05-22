<?php
    session_start();
    include '../config/db.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist - LaFlora</title>
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
<!-- Navbar (same as other pages) -->
 <?php include_once('../includes/nav.php'); ?>

<section class="wishlist-hero-section py-5">
  <div class="container">
    <h1 class="about-title mb-4 text-center">My Wishlist</h1>
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
      <div class="fs-5 text-secondary"><i class="fa fa-heart text-danger me-2"></i>4 items in your wishlist</div>
      <button class="btn btn-outline-danger btn-sm px-4" id="clearWishlist"><i class="fa fa-trash me-1"></i> Remove All</button>
    </div>
    <div class="row g-4" id="wishlistGrid">
      <!-- Dummy wishlist items -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card wishlist-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top wishlist-img" alt="Red Roses Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Red Roses Bouquet</h5>
            <div class="mb-2 text-muted small">Roses</div>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 1200</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill move-to-cart"><i class="fa fa-cart-arrow-down me-1"></i> Move to Cart</button>
              <button class="btn btn-outline-danger btn-sm flex-fill delete-wishlist"><i class="fa fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card wishlist-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" class="card-img-top wishlist-img" alt="Pink Tulips">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pink Tulips</h5>
            <div class="mb-2 text-muted small">Tulips</div>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 950</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill move-to-cart"><i class="fa fa-cart-arrow-down me-1"></i> Move to Cart</button>
              <button class="btn btn-outline-danger btn-sm flex-fill delete-wishlist"><i class="fa fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card wishlist-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=400&q=80" class="card-img-top wishlist-img" alt="White Orchids">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">White Orchids</h5>
            <div class="mb-2 text-muted small">Orchids</div>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 1800</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill move-to-cart"><i class="fa fa-cart-arrow-down me-1"></i> Move to Cart</button>
              <button class="btn btn-outline-danger btn-sm flex-fill delete-wishlist"><i class="fa fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card wishlist-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80" class="card-img-top wishlist-img" alt="Sunflower Sunshine">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Sunflower Sunshine</h5>
            <div class="mb-2 text-muted small">Sunflowers</div>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 1100</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill move-to-cart"><i class="fa fa-cart-arrow-down me-1"></i> Move to Cart</button>
              <button class="btn btn-outline-danger btn-sm flex-fill delete-wishlist"><i class="fa fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer (same as other pages) -->
 <?php include_once('../includes/footer.php'); ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="../public/js/main.js"></script>
</body>
</html>