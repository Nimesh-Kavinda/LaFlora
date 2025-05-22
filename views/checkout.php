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
 <?php include_once('../includes/nav.php'); ?>

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
 <?php include_once('../includes/footer.php'); ?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="../public/js/main.js"></script>
</body>
</html>