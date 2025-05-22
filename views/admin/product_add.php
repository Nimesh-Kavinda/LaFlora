<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Admin | LaFlora</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <div class="container-fluid min-vh-100 admin-bg">
        <div class="row h-100">
            <!-- Sidebar -->
            <?php include_once('./includes/admin_nav.php'); ?>
            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 ms-sm-auto px-md-5 py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="admin-title mb-0">Add Product</h1>
                    <a href="products.php" class="btn btn-theme"><i class="fas fa-arrow-left me-1"></i> Back to Products</a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card admin-card shadow-sm border-0 p-4">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="productName" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="productName" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="productCategory" class="form-label">Category</label>
                                        <select class="form-select" id="productCategory" name="category" required>
                                            <option value="">Select Category</option>
                                            <option value="Flowers">Flowers</option>
                                            <option value="Plants">Plants</option>
                                            <option value="Bouquets">Bouquets</option>
                                            <option value="Gifts">Gifts</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="productPrice" class="form-label">Price (Rs.)</label>
                                        <input type="number" class="form-control" id="productPrice" name="price" min="0" step="0.01" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="productStock" class="form-label">Stock</label>
                                        <input type="number" class="form-control" id="productStock" name="stock" min="0" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="productImage" class="form-label">Product Image</label>
                                        <input class="form-control" type="file" id="productImage" name="image" accept="image/*" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="productDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="productDescription" name="description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="mt-4 text-end">
                                    <button type="submit" class="btn btn-theme px-5"><i class="fas fa-save me-2"></i>Save Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
