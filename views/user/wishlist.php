<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist - LaFlora</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <div class="page-container">
        <div class="container">
            <div class="row content-wrapper">
                <!-- Sidebar -->
                <?php include_once('./includes/user_nav.php'); ?>

                <!-- Main Content -->
                <div class="col-md-9 col-lg-9 content">
                    <h2 class="section-title">My Wishlist</h2>
                    <div class="row g-4">
                        <!-- Example wishlist item card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Rose Bouquet">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-truncate">Rose Bouquet</h5>
                                    <p class="card-text small text-muted mb-2">A beautiful bouquet of fresh roses, perfect for any occasion.</p>
                                    <div class="mt-auto d-flex justify-content-between gap-2">
                                        <form method="post" action="#" class="d-inline">
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Remove from Wishlist"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <form method="post" action="#" class="d-inline">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart me-1"></i> Move to Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Orchid Basket">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-truncate">Orchid Basket</h5>
                                    <p class="card-text small text-muted mb-2">Elegant orchids arranged in a stylish basket for your loved ones.</p>
                                    <div class="mt-auto d-flex justify-content-between gap-2">
                                        <form method="post" action="#" class="d-inline">
                                            <button type="submit" class="btn btn-outline-danger btn-sm" title="Remove from Wishlist"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <form method="post" action="#" class="d-inline">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart me-1"></i> Move to Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more wishlist item cards as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
