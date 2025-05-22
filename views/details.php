<?php
session_start();
require_once '../config/db.php';

// Get product ID from query string
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$product = null;

if ($product_id > 0) {
    $stmt = $conn->prepare('SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE p.id = :id');
    $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - LaFlora</title>
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
    <?php include_once '../includes/nav.php'; ?>
    <div class="container py-5">
        <?php if ($product): ?>
            <div class="row g-5 align-items-center product-details-card bg-white rounded shadow p-4">
                <div class="col-md-5 text-center">
                    <img src="../uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid rounded product-image" style="max-height:350px;object-fit:contain;">
                </div>
                <div class="col-md-7">
                    <h2 class="mb-3 product-title" style="color:var(--primary-color)"><?= htmlspecialchars($product['name']) ?></h2>
                    <h4 class="mb-3 product-price" style="color:var(--accent-color)">₹<?= number_format($product['price'], 2) ?></h4>
                    <p class="mb-2 text-muted"><strong>Category:</strong> <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?></p>
                    <p class="mb-4 product-description"><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                    <form method="POST" action="../controller/add_to_cart.php" class="d-inline">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <button type="submit" class="btn btn-primary me-2"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    </form>
                    <form method="POST" action="../controller/add_to_wishlist.php" class="d-inline">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <button type="submit" class="btn btn-outline-danger"><i class="fas fa-heart"></i> Add to Wishlist</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center">Product not found.</div>
        <?php endif; ?>
    </div>
    <?php include_once '../includes/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>