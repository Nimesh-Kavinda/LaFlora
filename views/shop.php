<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - LaFlora</title>
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

<section class="shop-hero-section py-5">
  <div class="container">
    <h1 class="shop-title about-title mb-4 text-center">Shop Flowers</h1>
    <form id="shopFilterForm" method="GET" action="">
      <div class="row mb-4 align-items-center g-3">
        <div class="col-md-4">
          <input type="text" class="form-control shop-search-input" id="shopSearch" name="search" placeholder="Search for flowers...">
        </div>
        <div class="col-md-3">
          <select class="form-select shop-filter-select" id="categoryFilter" name="category">
            <option value="">All Categories</option>
            <option value="Roses">Roses</option>
            <option value="Tulips">Tulips</option>
            <option value="Orchids">Orchids</option>
            <option value="Sunflowers">Sunflowers</option>
          </select>
        </div>
        <div class="col-md-3">
          <select class="form-select shop-filter-select" id="priceFilter" name="price">
            <option value="">All Prices</option>
            <option value="0-1000">Below Rs. 1000</option>
            <option value="1000-1500">Rs. 1000 - Rs. 1500</option>
            <option value="1500-2000">Rs. 1500 - Rs. 2000</option>
            <option value="2000-99999">Above Rs. 2000</option>
          </select>
        </div>
        <div class="col-md-2 text-end">
          <button class="btn btn-laflora w-100" id="clearFilters" type="reset">Clear Filters</button>
        </div>
      </div>
    </form>
    <div class="row g-4" id="shopProductGrid">
      <div class="col-md-4 col-lg-3">
        <div class="card product-card h-100 d-flex flex-column">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Red Roses Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Red Roses Bouquet</h5>
            <div class="mb-2 text-muted small">Roses</div>
            <p class="card-text mb-2">Classic bouquet of fresh red roses.</p>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.15rem;">Rs. 1200</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill"><i class="fa fa-cart-plus me-1"></i> Add to Cart</button>
              <button class="btn btn-outline-secondary btn-sm flex-fill"><i class="fa fa-heart me-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="card product-card h-100 d-flex flex-column">
          <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Pink Tulips">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Pink Tulips</h5>
            <div class="mb-2 text-muted small">Tulips</div>
            <p class="card-text mb-2">Delicate pink tulips for any occasion.</p>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.15rem;">Rs. 950</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill"><i class="fa fa-cart-plus me-1"></i> Add to Cart</button>
              <button class="btn btn-outline-secondary btn-sm flex-fill"><i class="fa fa-heart me-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="card product-card h-100 d-flex flex-column">
          <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="White Orchids">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">White Orchids</h5>
            <div class="mb-2 text-muted small">Orchids</div>
            <p class="card-text mb-2">Elegant white orchids in a glass vase.</p>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.15rem;">Rs. 1800</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill"><i class="fa fa-cart-plus me-1"></i> Add to Cart</button>
              <button class="btn btn-outline-secondary btn-sm flex-fill"><i class="fa fa-heart me-1"></i> Wishlist</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="card product-card h-100 d-flex flex-column">
          <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Sunflower Sunshine">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Sunflower Sunshine</h5>
            <div class="mb-2 text-muted small">Sunflowers</div>
            <p class="card-text mb-2">Bright sunflowers to light up the day.</p>
            <div class="mb-3 fw-bold" style="color: var(--laflora-secondary); font-size: 1.15rem;">Rs. 1100</div>
            <div class="mt-auto d-flex gap-2">
              <button class="btn btn-laflora btn-sm flex-fill"><i class="fa fa-cart-plus me-1"></i> Add to Cart</button>
              <button class="btn btn-outline-secondary btn-sm flex-fill"><i class="fa fa-heart me-1"></i> Wishlist</button>
            </div>
          </div>
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
