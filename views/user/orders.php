<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - LaFlora</title>
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
                    <h2 class="section-title">My Orders</h2>
                    <form method="post" action="#">
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1001</td>
                                        <td>2025-05-20</td>
                                        <td>Rose Bouquet, Lily Pot</td>
                                        <td>$45.00</td>
                                        <td>
                                            <select class="form-select form-select-sm" name="status[1001]">
                                                <option>Pending</option>
                                                <option>Processing</option>
                                                <option>Shipped</option>
                                                <option>Delivered</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" name="delete[1001]" class="btn btn-link text-danger p-0" title="Delete Order">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1002</td>
                                        <td>2025-05-18</td>
                                        <td>Orchid Basket</td>
                                        <td>$30.00</td>
                                        <td>
                                            <select class="form-select form-select-sm" name="status[1002]">
                                                <option>Pending</option>
                                                <option selected>Processing</option>
                                                <option>Shipped</option>
                                                <option>Delivered</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" name="delete[1002]" class="btn btn-link text-danger p-0" title="Delete Order">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- More rows as needed -->
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Update Orders</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
