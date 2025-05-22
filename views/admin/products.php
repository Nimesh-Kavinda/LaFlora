<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products - LaFlora</title>
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
                    <h1 class="admin-title mb-0">Products</h1>
                    <a href="./product_add.php" class="btn btn-theme"><i class="fas fa-plus me-1"></i> Add Product</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle bg-white">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rose Bouquet</td>
                                <td>Flowers</td>
                                <td>$25.00</td>
                                <td>50</td>
                                <td>2025-05-01</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2" title="Edit"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Orchid Basket</td>
                                <td>Plants</td>
                                <td>$40.00</td>
                                <td>20</td>
                                <td>2025-04-28</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2" title="Edit"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- More product rows as needed -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
