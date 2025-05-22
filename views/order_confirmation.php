<?php
    session_start();
    include '../config/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Confirmation - LaFlora</title>
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

<section class="order-confirm-section py-5">
  <div class="container">
    <div class="d-flex flex-column align-items-center mb-4">
      <div class="order-complete-icon mb-3">
        <i class="fa fa-circle-check fa-4x text-success"></i>
      </div>
      <h1 class="about-title text-center mb-2">Order Confirmed!</h1>
      <div class="fs-5 text-secondary text-center mb-4">Thank you for choosing us .! Your order has been placed successfully.</div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6">
        <div class="card receipt-card shadow-sm border-0 p-4 mb-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="fw-bold">Order #</span>
            <span>LF-20250521-001</span>
          </div>
          <div class="mb-2">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span>Red Roses Bouquet</span>
              <span>Rs. 1200 x 1</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span>Pink Tulips</span>
              <span>Rs. 950 x 2</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span>White Orchids</span>
              <span>Rs. 1800 x 1</span>
            </div>
          </div>
          <hr>
          <div class="d-flex justify-content-between mb-2">
            <span>Subtotal</span>
            <span>Rs. 4900</span>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Delivery</span>
            <span>Free</span>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Payment Method</span>
            <span>Cash on Delivery</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between mb-3">
            <span class="fs-5 fw-bold">Total</span>
            <span class="fs-5 fw-bold text-success">Rs. 4900</span>
          </div>
        </div>
        <div class="text-center">
          <a href="../index.html" class="btn btn-laflora px-5 py-2 fs-5"><i class="fa fa-check me-2"></i>Done</a>
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