<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - LaFlora</title>
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

<section class="cart-hero-section py-5">
  <div class="container">
    <h1 class="about-title mb-4 text-center">My Cart</h1>
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
      <div class="fs-5 text-secondary"><i class="fa fa-cart-shopping text-success me-2"></i>3 items in your cart</div>
      <form method="post" action="">
        <button class="btn btn-outline-danger btn-sm px-4" id="clearCart" name="clear_cart" type="submit"><i class="fa fa-trash me-1"></i> Clear All</button>
      </form>
    </div>
    <div class="row g-4 align-items-start">
      <div class="col-lg-8">
        <div class="cart-list" id="cartList">
          <!-- Dummy cart items -->
          <div class="card cart-card mb-4 border-0 shadow-sm">
            <div class="row g-0 align-items-center">
              <div class="col-4 col-md-3">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="cart-img" alt="Red Roses Bouquet">
              </div>
              <div class="col-8 col-md-9">
                <div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
                  <div class="flex-fill">
                    <h5 class="card-title mb-1">Red Roses Bouquet</h5>
                    <div class="mb-1 text-muted small">Roses</div>
                    <div class="fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 1200</div>
                  </div>
                  <form method="post" action="#" class="d-flex align-items-center gap-2 mb-0">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="decrease_qty" value="1" type="submit"><i class="fa fa-minus"></i></button>
                    <input type="number" class="form-control cart-qty-input" name="quantity[1]" value="1" min="1" style="width: 55px;">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="increase_qty" value="1" type="submit"><i class="fa fa-plus"></i></button>
                  </form>
                  <form method="post" action="#" class="mb-0">
                    <button class="btn btn-outline-danger btn-sm cart-remove" name="remove_item" value="1" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card cart-card mb-4 border-0 shadow-sm">
            <div class="row g-0 align-items-center">
              <div class="col-4 col-md-3">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" class="cart-img" alt="Pink Tulips">
              </div>
              <div class="col-8 col-md-9">
                <div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
                  <div class="flex-fill">
                    <h5 class="card-title mb-1">Pink Tulips</h5>
                    <div class="mb-1 text-muted small">Tulips</div>
                    <div class="fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 950</div>
                  </div>
                  <form method="post" action="" class="d-flex align-items-center gap-2 mb-0">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="decrease_qty" value="2" type="submit"><i class="fa fa-minus"></i></button>
                    <input type="number" class="form-control cart-qty-input" name="quantity[2]" value="2" min="1" style="width: 55px;">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="increase_qty" value="2" type="submit"><i class="fa fa-plus"></i></button>
                  </form>
                  <form method="post" action="" class="mb-0">
                    <button class="btn btn-outline-danger btn-sm cart-remove" name="remove_item" value="2" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card cart-card mb-4 border-0 shadow-sm">
            <div class="row g-0 align-items-center">
              <div class="col-4 col-md-3">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=400&q=80" class="cart-img" alt="White Orchids">
              </div>
              <div class="col-8 col-md-9">
                <div class="card-body d-flex flex-column flex-md-row align-items-md-center gap-3">
                  <div class="flex-fill">
                    <h5 class="card-title mb-1">White Orchids</h5>
                    <div class="mb-1 text-muted small">Orchids</div>
                    <div class="fw-bold" style="color: var(--laflora-secondary); font-size: 1.1rem;">Rs. 1800</div>
                  </div>
                  <form method="post" action="" class="d-flex align-items-center gap-2 mb-0">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="decrease_qty" value="3" type="submit"><i class="fa fa-minus"></i></button>
                    <input type="number" class="form-control cart-qty-input" name="quantity[3]" value="1" min="1" style="width: 55px;">
                    <button class="btn btn-outline-secondary btn-sm cart-qty-btn" name="increase_qty" value="3" type="submit"><i class="fa fa-plus"></i></button>
                  </form>
                  <form method="post" action="" class="mb-0">
                    <button class="btn btn-outline-danger btn-sm cart-remove" name="remove_item" value="3" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
       
          <div class="cart-summary card shadow-sm border-0 p-4 sticky-top" style="top: 100px;">
            <h4 class="mb-3" style="color: var(--laflora-primary);">Order Summary</h4>
            <div class="d-flex justify-content-between mb-2">
              <span>Items (4)</span>
              <span>Rs. 1200 + Rs. 950 x 2 + Rs. 1800</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal</span>
              <span class="fw-bold" id="cartSubtotal">Rs. 4900</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Delivery</span>
              <span>Free</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-3">
              <span class="fs-5 fw-bold">Total</span>
              <span class="fs-5 fw-bold text-success" id="cartTotal">Rs. 4900</span>
            </div>
            <a href="checkout.html" class="btn btn-laflora w-100 py-2 fs-5" id="checkoutBtn" name="checkout" type="submit"><i class="fa fa-credit-card me-2"></i>Checkout</a>
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