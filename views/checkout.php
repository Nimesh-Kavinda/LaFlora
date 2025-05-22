<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - LaFlora</title>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand" href="../index.html">LaFlora <i class="fa-solid fa-seedling ms-1"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../index.html#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.html">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html#contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link" href="wishlist.html" title="Wishlist"><i class="fa-regular fa-heart"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.html" title="Cart"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.html" title="Sign In"><i class="fa-regular fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="checkout-hero-section py-5">
  <div class="container">
    <h1 class="about-title mb-4 text-center">Checkout</h1>
    <div class="row g-4 align-items-start">
      <!-- Checkout Form -->
      <div class="col-lg-7">
        <div class="card shadow-sm border-0 p-4 checkout-form-card">
          <h4 class="mb-3" style="color: var(--laflora-primary);">Shipping Details</h4>
          <form method="post" action="">
            <div class="mb-3">
              <label for="checkoutName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="checkoutName" name="name" required>
            </div>
            <div class="mb-3">
              <label for="checkoutPhone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="checkoutPhone" name="phone" required>
            </div>
            <div class="mb-3">
              <label for="checkoutAddress" class="form-label">Delivery Address</label>
              <textarea class="form-control" id="checkoutAddress" name="address" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label" for="paymentMethod">Payment Method</label>
              <select class="form-select" id="paymentMethod" name="payment_method" required>
                <option value="cod">Cash on Delivery</option>
                <option value="pickup">Pickup from Shop</option>
              </select>
            </div>
            <button class="btn btn-laflora w-100 py-2 fs-5 mt-2" type="submit"><i class="fa fa-check-circle me-2"></i>Place Order</button>
          </form>
        </div>
      </div>
      <!-- Order Summary -->
      <div class="col-lg-5">
        <div class="cart-summary card shadow-sm border-0 p-4 sticky-top" style="top: 100px;">
          <h4 class="mb-3" style="color: var(--laflora-primary);">Order Summary</h4>
          <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="fw-bold">Red Roses Bouquet</span>
              <span>Rs. 1200 x 1</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="fw-bold">Pink Tulips</span>
              <span>Rs. 950 x 2</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="fw-bold">White Orchids</span>
              <span>Rs. 1800 x 1</span>
            </div>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Subtotal</span>
            <span class="fw-bold">Rs. 4900</span>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Delivery</span>
            <span>Free</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between mb-3">
            <span class="fs-5 fw-bold">Total</span>
            <span class="fs-5 fw-bold text-success">Rs. 4900</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer (same as other pages) -->
<footer class="footer">
  <div class="container">
    <div class="row align-items-stretch gy-4">
      <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start">
        <div class="footer-section">
          <span class="footer-logo">LaFlora <i class="fa-solid fa-seedling"></i></span>
          <div>Order the freshest flowers online.</div>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-flex align-items-center">
        <div class="footer-divider"></div>
      </div>
      <div class="col-md-3 d-flex align-items-center justify-content-center">
        <div class="footer-section text-center text-md-start">
          <div class="fw-bold mb-1">Quick Links</div>
          <a href="../index.html#home" class="footer-link">Home</a>
          <a href="about.html" class="footer-link">About</a>
          <a href="shop.html" class="footer-link">Shop</a>
          <a href="../index.html#contact" class="footer-link">Contact</a>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-flex align-items-center">
        <div class="footer-divider"></div>
      </div>
      <div class="col-md-3 d-flex align-items-center justify-content-center justify-content-md-end">
        <div class="footer-section text-center text-md-end">
          <div class="fw-bold mb-1">Contact & Social</div>
          <div class="mb-1">
            <a href="#" class="footer-social" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="footer-social" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="footer-social" title="Twitter"><i class="fab fa-twitter"></i></a>
          </div>
          <div>Call: <a href="tel:0715343747" class="footer-link">0715343747</a></div>
          <div>Email: <a href="mailto:info@laflora.com" class="footer-link">info@laflora.com</a></div>
        </div>
      </div>
    </div>
    <div class="footer-bottom mt-4">&copy; 2025 LaFlora. All rights reserved.</div>
  </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="../public/js/main.js"></script>
</body>
</html>