<?php
session_start();
require_once '../config/db.php';

// Get product ID from query string
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$product = null;

if ($product_id > 0) {
    $stmt = $conn->prepare('SELECT p.*, c.category_name AS category_name FROM products p LEFT JOIN category c ON p.category_id = c.id WHERE p.id = :id');
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
  <style>    .product-details-wrapper {
        padding: 2rem 0;
        background-color: #f8f9fa;
    }

    .product-details-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        padding: 2.5rem !important;
        margin: 1rem 0;
    }

    .product-image-container {
        position: relative;
        background: #fff;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .product-image {
        max-height: 400px;
        width: auto;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .product-image:hover {
        transform: scale(1.05);
    }

    .product-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 2.2rem;
        margin-bottom: 1rem;
        color: var(--primary-color);
    }

    .product-price {
        font-size: 1.8rem;
        font-weight: 600;
        color: var(--accent-color);
        margin-bottom: 1.5rem;
    }

    .category-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #f8f9fa;
        border-radius: 25px;
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }

    .product-description {
        font-size: 1rem;
        line-height: 1.8;
        color: #666;
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #eee;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .btn-add-cart {
        background-color: var(--laflora-primary);
        border: none;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        flex: 2;
    }

    .btn-add-cart:hover {
        background-color: var(--laflora-secondary);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 105, 180, 0.2);
    }

    .btn-wishlist {
        background-color: white;
        border: 2px solid var(--laflora-secondary);
        color: var(--accent-color);
        padding: 0.8rem 2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        flex: 1;
    }

    .btn-wishlist:hover {
        background-color: var(--laflora-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.2);
    }

    .btn i {
        margin-right: 8px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .product-details-card {
            padding: 1.5rem !important;
        }

        .product-title {
            font-size: 1.8rem;
        }

        .product-price {
            font-size: 1.5rem;
        }

        .action-buttons {
            flex-direction: column;
        }

        .btn-add-cart, .btn-wishlist {
            width: 100%;
        }
    }
  </style>
</head>
<body>    <?php include_once '../includes/nav.php'; ?>
    <div class="product-details-wrapper">
        <div class="container">
            <?php if ($product): ?>
                <div class="row g-4 align-items-center product-details-card">
                    <div class="col-md-6">
                        <div class="product-image-container">
                            <img src="../uploads/products/<?= htmlspecialchars($product['image'] ?? 'default.png') ?>" 
                                 alt="<?= htmlspecialchars($product['name']) ?>" 
                                 class="img-fluid rounded product-image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="product-title"><?= htmlspecialchars($product['name']) ?></h1>
                        <div class="product-price">Rs <?= number_format($product['price'], 2) ?></div>
                        <div class="category-badge">
                            <i class="fas fa-tag me-2"></i>
                            <?= htmlspecialchars($product['category_name'] ?? 'Uncategorized') ?>
                        </div>
                        <div class="product-description">
                            <?= nl2br(htmlspecialchars($product['description'])) ?>
                        </div>
                        <div class="action-buttons">
                            <form method="POST" action="../controller/add_to_cart.php">
                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                <button type="submit" class="btn btn-add-cart">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </form>
                            <form method="POST" action="../controller/add_to_wishlist.php">
                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                <button type="submit" class="btn btn-wishlist">
                                    <i class="fas fa-heart"></i> Add to Wishlist
                                </button>
                            </form>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center">Product not found.</div>
        <?php endif; ?>            </div>
        </div>
    </div>
    <?php include_once '../includes/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>