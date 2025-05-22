<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - LaFlora</title>
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
                <h1 class="mb-4 admin-title">Welcome, Admin!</h1>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card admin-card shadow-sm border-0">
                            <div class="card-body text-center">
                                <i class="fas fa-box-open fa-2x mb-2 text-primary"></i>
                                <h5 class="card-title mb-1">Products</h5>
                                <p class="card-text text-muted">120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card admin-card shadow-sm border-0">
                            <div class="card-body text-center">
                                <i class="fas fa-tags fa-2x mb-2 text-success"></i>
                                <h5 class="card-title mb-1">Categories</h5>
                                <p class="card-text text-muted">15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card admin-card shadow-sm border-0">
                            <div class="card-body text-center">
                                <i class="fas fa-shopping-cart fa-2x mb-2 text-warning"></i>
                                <h5 class="card-title mb-1">Orders</h5>
                                <p class="card-text text-muted">320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card admin-card shadow-sm border-0">
                            <div class="card-body text-center">
                                <i class="fas fa-users fa-2x mb-2 text-danger"></i>
                                <h5 class="card-title mb-1">Users</h5>
                                <p class="card-text text-muted">80</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more dashboard widgets or charts as needed -->
            </main>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
