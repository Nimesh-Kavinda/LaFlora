<?php
    session_start();
    include './config/db.php';

    $produtcts = [];
    $stmt = $conn->query('SELECT id, name, price, image FROM products ORDER BY id DESC LIMIT 4');
    if ($stmt) {
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaFlora - Online Flower Ordering</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for Logo -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Google Fonts for body and headings -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand" href="#">LaFlora <i class="fa-solid fa-seedling ms-1"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/contact.php">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'wishlist.php') echo 'active'; ?> position-relative" href="./views/wishlist.php" title="Wishlist">
            <i class="fa-regular fa-heart"></i>
            <?php
              if (isset($_SESSION['user_id'])) {
                $stmt = $conn->prepare('SELECT COUNT(*) as count FROM wishlist WHERE user_id = ?');
                $stmt->execute([$_SESSION['user_id']]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = (int)($result['count'] ?? 0);
                if ($count > 0) {
                  echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-count">'
                      . $count . '</span>';
                } else {
                  echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-count" style="display: none;">0</span>';
                }
              }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'cart.php') echo 'active'; ?> position-relative" href="./views/cart.php" title="Cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <?php
              if (isset($_SESSION['user_id'])) {
                $stmt = $conn->prepare('SELECT COUNT(*) as count FROM cart WHERE user_id = ?');
                $stmt->execute([$_SESSION['user_id']]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = (int)($result['count'] ?? 0);
                echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count"'
                    . ($count > 0 ? '' : ' style="display:none;"') . '>' . $count . '</span>';
              } else {
                echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count" style="display:none;">0</span>';
              }
            ?>
          </a>
        </li>
         <?php
            if (isset($_SESSION['name'])) {
                if ($_SESSION['user_type'] == 'admin') {
                    echo '<li class="nav-item">
                            <a class="nav-link" href="./views/admin/dashboard.php" title="Admin Dashboard"><i class="fa-solid fa-user-shield"></i></a>
                          </li>';
                } else
                echo '<li class="nav-item">
                        <a class="nav-link" href="./views/user/profile.php" title="Profile"><i class="fa-regular fa-user"></i></a>
                      </li>';
            } else {    
                echo '<li class="nav-item">
                        <a class="nav-link" href="views/signin.php" title="Sign In"><i class="fa-regular fa-user"></i></a>
                      </li>';
            }
        ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section" id="home">
  <div class="container">
    <h1>Welcome to LaFlora</h1>
    <p class="mb-4">Order the freshest, most beautiful flowers online. Fast delivery, stunning arrangements, and a touch of nature for every occasion.</p>
    <a href="./views/shop.php" class="btn btn-laflora btn-lg">Shop Now</a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3" style="color:var(--laflora-primary)">Why Choose LaFlora?</h2>
        <p>LaFlora brings you handpicked, premium flowers delivered right to your doorstep. Our expert florists craft each bouquet with love and care, ensuring every order is a memorable experience. Whether it's a birthday, anniversary, or just because, we have the perfect blooms for you.</p>
        <ul class="list-unstyled mt-3">
          <li><i class="fa-solid fa-truck-fast me-2" style="color:var(--laflora-secondary)"></i>Same-day delivery available</li>
          <li><i class="fa-solid fa-leaf me-2" style="color:var(--laflora-secondary)"></i>Eco-friendly packaging</li>
          <li><i class="fa-solid fa-award me-2" style="color:var(--laflora-secondary)"></i>100% freshness guarantee</li>
        </ul>
      </div>
      <div class="col-md-6 text-center">
        <div class="image-slider-container" id="about-image-slider">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=500&q=80" class="image-slider-slide active" alt="Bouquet 1">
          <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=500&q=80" class="image-slider-slide" alt="Bouquet 2">
          <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=500&q=80" class="image-slider-slide" alt="Bouquet 3">
          <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a3c8b?auto=format&fit=crop&w=500&q=80" class="image-slider-slide" alt="Bouquet 4">
          <div class="image-slider-dots">
            <span class="image-slider-dot active" data-slide="0"></span>
            <span class="image-slider-dot" data-slide="1"></span>
            <span class="image-slider-dot" data-slide="2"></span>
            <span class="image-slider-dot" data-slide="3"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5" style="color:var(--laflora-primary)">Our Best Products</h2>
    <div class="row g-4">
      <!-- Product Card Example -->
       
      <?php foreach ($products as $product): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card product-card h-75 shadow-lg border-0">
          <img src="./uploads/products/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">          <div class="card-body text-center">
            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
            <p class="card-text">Rs. <?php echo number_format($product['price'], 2); ?></p>
            <?php if (isset($_SESSION['user_id'])): ?>
                <button type="button" class="btn btn-laflora add-to-cart-btn" data-product-id="<?php echo $product['id']; ?>">
                    <i class="fa fa-cart-plus me-1"></i> Add to Cart
                </button>
            <?php else: ?>
                <a href="views/signin.php" class="btn btn-laflora">
                    <i class="fa fa-cart-plus me-1"></i> Add to Cart
                </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- Add more product cards as needed -->
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow border-0">
          <div class="card-body p-4">
            <h2 class="mb-4" style="color:var(--laflora-primary)">Contact Us</h2>
            <form>
              <div class="row mb-3">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-laflora">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
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
          <a href="#home" class="footer-link">Home</a>
          <a href="#about" class="footer-link">About</a>
          <a href="#products" class="footer-link">Shop</a>
          <a href="#contact" class="footer-link">Contact</a>
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
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<!-- Custom JS -->
<script src="public/js/main.js"></script>
<script src="public/js/cart.js"></script>
</body>
</html>