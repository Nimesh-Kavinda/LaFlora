<?php
    session_start();
    include '../config/db.php';

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: signin.php');
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $wishlist_items = [];

    // Fetch wishlist items with product details
    $stmt = $conn->prepare('
        SELECT w.wishlist_id, p.id as product_id, p.name, p.price, p.qty as stock, p.image, cat.category_name 
        FROM wishlist w 
        JOIN products p ON w.product_id = p.id 
        LEFT JOIN category cat ON p.category_id = cat.id 
        WHERE w.user_id = ? 
        ORDER BY w.added_at DESC
    ');
    $stmt->execute([$user_id]);
    $wishlist_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get wishlist count
    $wishlist_count = count($wishlist_items);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist - LaFlora</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for Logo -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Google Fonts for body and headings -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<!-- Navbar -->
<?php include_once('../includes/nav.php'); ?>

<section class="wishlist-hero-section py-5">
    <div class="container">
        <h1 class="about-title mb-4 text-center">My Wishlist</h1>
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div class="fs-5 text-secondary">
                <i class="fa fa-heart text-danger me-2"></i>
                <?php echo $wishlist_count; ?> item<?php echo $wishlist_count !== 1 ? 's' : ''; ?> in your wishlist
            </div>
            <?php if (!empty($wishlist_items)): ?>
                <button class="btn btn-outline-danger btn-sm px-4" id="clearWishlist">
                    <i class="fa fa-trash me-1"></i> Remove All
                </button>
            <?php endif; ?>
        </div>
        <div class="row g-4" id="wishlistGrid">
            <?php if (empty($wishlist_items)): ?>
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">Your wishlist is empty</h4>
                        <a href="shop.php" class="btn btn-laflora mt-3">
                            <i class="fas fa-shopping-bag me-2"></i>Continue Shopping
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($wishlist_items as $item): ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card h-100 shadow-sm">
                            <a href="./details.php?id=<?php echo $item['product_id']; ?>">
                                <img src="../uploads/products/<?php echo htmlspecialchars($item['image']); ?>" 
                                     class="card-img-top" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            </a>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary"><?php echo htmlspecialchars($item['name']); ?></h5>
                                <div class="mb-2 text-muted small"><?php echo htmlspecialchars($item['category_name']); ?></div>
                                <div class="mb-3 fw-bold text-success">Rs. <?php echo number_format($item['price'], 2); ?></div>
                                <div class="mt-auto d-flex gap-2">
                                    <button type="button" class="btn btn-laflora btn-sm w-100 add-to-cart-btn" 
                                            data-product-id="<?php echo $item['product_id']; ?>">
                                        <i class="fa fa-cart-plus me-1"></i> Add to Cart
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm wishlist-remove" 
                                            data-wishlist-id="<?php echo $item['wishlist_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include_once('../includes/footer.php'); ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<!-- Custom JS -->
<script src="../public/js/main.js"></script>
<script src="../public/js/cart.js"></script>
<script src="../public/js/wishlist.js"></script>
</body>
</html>