<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders - LaFlora</title>
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
                    <h1 class="admin-title mb-0">Orders</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle bg-white order-table">
                        <thead class="table-light">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total (Rs.)</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>Jane Doe</td>
                                <td>jane@example.com</td>
                                <td>2025-05-20</td>
                                <td>Rose Bouquet x1, Lily Pot x2</td>
                                <td>2500</td>
                                <td>
                                    <select class="form-select form-select-sm order-status-select">
                                        <option>Pending</option>
                                        <option selected>Processing</option>
                                        <option>Shipped</option>
                                        <option>Delivered</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1002</td>
                                <td>John Smith</td>
                                <td>john@example.com</td>
                                <td>2025-05-18</td>
                                <td>Orchid Basket x1</td>
                                <td>1800</td>
                                <td>
                                    <select class="form-select form-select-sm order-status-select">
                                        <option selected>Pending</option>
                                        <option>Processing</option>
                                        <option>Shipped</option>
                                        <option>Delivered</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <!-- More order rows as needed -->
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
