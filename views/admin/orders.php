<?php
    session_start();
    include '../../config/db.php';

    // Check if admin is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../signin.php');
        exit;
    }

    // Process status updates if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
        $order_id = $_POST['order_id'];
        $new_status = $_POST['update_status'];
        
        // Only allow processing and shipped status updates
        if (in_array($new_status, ['processing', 'shipped'])) {
            $stmt = $conn->prepare('UPDATE orders SET status = ? WHERE order_id = ? AND status NOT IN ("complete", "canceled")');
            if ($stmt->execute([$new_status, $order_id])) {
                $success_message = "Order status updated successfully!";
            }
        }
    }

    // Delete order if requested
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_order'])) {
        $order_id = $_POST['order_id'];
        
        // Start transaction
        $conn->beginTransaction();
        
        try {
            // Delete order items first
            $stmt = $conn->prepare('DELETE FROM order_items WHERE order_id = ?');
            $stmt->execute([$order_id]);
            
            // Then delete the order
            $stmt = $conn->prepare('DELETE FROM orders WHERE order_id = ?');
            $stmt->execute([$order_id]);
            
            // Commit transaction
            $conn->commit();
            $success_message = "Order deleted successfully!";
        } catch (Exception $e) {
            $conn->rollBack();
            $error_message = "Failed to delete order. Please try again.";
        }
    }

    // Fetch all orders with user details
    $stmt = $conn->prepare('
        SELECT o.*, u.name as customer_name, u.email,
               GROUP_CONCAT(CONCAT(p.name, " (", oi.quantity, ")") SEPARATOR ", ") as product_names
        FROM orders o
        LEFT JOIN users u ON o.user_id = u.id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON oi.product_id = p.id
        GROUP BY o.order_id
        ORDER BY o.order_date DESC
    ');
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders - LaFlora</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/main.css">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
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

                <?php if (isset($success_message)): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo htmlspecialchars($success_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (isset($error_message)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo htmlspecialchars($error_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

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
                                <th>Update Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($orders)): ?>
                                <tr>
                                    <td colspan="9" class="text-center">No orders found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td><?php echo $order['order_id']; ?></td>                                        <td class="customer-name"><?php echo htmlspecialchars($order['customer_name']); ?></td>
                                        <td><span class="text-muted"><?php echo htmlspecialchars($order['email']); ?></span></td>
                                        <td><span class="text-muted"><?php echo date('M j, Y', strtotime($order['order_date'])); ?></span></td>
                                        <td class="items-column">
                                            <?php 
                                            $products = explode(', ', $order['product_names']);
                                            foreach ($products as $product) {
                                                echo '<div class="mb-1">' . htmlspecialchars($product) . '</div>';
                                            }
                                            ?>
                                        </td>
                                        <td><strong>Rs. <?php echo number_format($order['total_amount'], 2); ?></strong></td>
                                        <td>
                                            <?php
                                                $status_class = match($order['status']) {
                                                    'pending' => 'bg-warning text-dark',
                                                    'processing' => 'bg-info text-dark',
                                                    'shipped' => 'bg-primary',
                                                    'complete', 'delivered' => 'bg-success',
                                                    'canceled', 'cancelled' => 'bg-danger',
                                                    default => 'bg-secondary'
                                                };
                                                $status_text = ucfirst($order['status']);
                                            ?>
                                            <span class="badge <?php echo $status_class; ?>"><?php echo $status_text; ?></span>
                                        </td>
                                        <td>
                                            <?php if (!in_array($order['status'], ['complete', 'canceled'])): ?>
                                            <form method="POST" class="status-update-form" data-order-id="<?php echo $order['order_id']; ?>">
                                                <input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">
                                                <select name="update_status" class="form-select form-select-sm status-select">
                                                    <option value="">Update status...</option>
                                                    <option value="processing" <?php echo $order['status'] === 'processing' ? 'selected' : ''; ?>>Processing</option>
                                                    <option value="shipped" <?php echo $order['status'] === 'shipped' ? 'selected' : ''; ?>>Shipped</option>
                                                </select>
                                            </form>
                                            <?php else: ?>
                                                <span class="text-muted">No actions available</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">                                            <button type="button" class="btn btn-sm btn-outline-danger delete-order-btn" 
                                                    data-order-id="<?php echo $order['order_id']; ?>" 
                                                    title="Delete Order">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>    <style>
        .status-select {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.875rem;
            background-color: #fff;
            transition: all 0.3s ease;
            width: auto;
            min-width: 160px;
        }
        
        .status-select:hover, .status-select:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 2px rgba(255, 105, 180, 0.1);
            outline: none;
        }

        .badge {
            font-weight: 500;
            padding: 0.5em 0.8em;
            border-radius: 6px;
        }

        .order-table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            border: none;
        }

        .order-table thead {
            background-color: #f8f9fa;
        }

        .order-table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 1rem;
            color: #495057;
            border-bottom: 2px solid #e9ecef;
            white-space: nowrap;
        }

        .order-table td {
            vertical-align: middle;
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            font-size: 0.95rem;
        }

        .order-table tbody tr:hover {
            background-color: #f8f9fa;
            transition: background-color 0.2s ease;
        }

        .order-table .items-column {
            max-width: 300px;
            line-height: 1.5;
        }

        .order-table .form-select {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .btn-outline-danger {
            border-width: 2px;
            padding: 0.375rem 0.75rem;
            transition: all 0.2s ease;
        }

        .btn-outline-danger:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(220, 53, 69, 0.2);
        }

        .form-select {
            cursor: pointer;
        }

        .table-responsive {
            border-radius: 10px;
            background: white;
            padding: 1rem;
            margin: 1rem 0;
        }
        
        /* Add zebra striping */
        .order-table tbody tr:nth-child(even) {
            background-color: #fcfcfc;
        }
        
        /* Make the customer name bold */
        .customer-name {
            font-weight: 500;
            color: #2c3e50;
        }
    </style>    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle status updates
        document.querySelectorAll('.status-update-form select').forEach(select => {
            select.addEventListener('change', function() {
                if (this.value) {
                    this.closest('form').submit();
                }
            });
        });

        // Handle delete buttons
        document.querySelectorAll('.delete-order-btn').forEach(button => {
            button.addEventListener('click', function() {
                const orderId = this.dataset.orderId;
                const btn = this;

                Swal.fire({
                    title: 'Delete Order?',
                    text: 'Are you sure you want to delete this order? This action cannot be undone.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Create and submit form
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.style.display = 'none';

                        const orderIdInput = document.createElement('input');
                        orderIdInput.type = 'hidden';
                        orderIdInput.name = 'order_id';
                        orderIdInput.value = orderId;

                        const deleteInput = document.createElement('input');
                        deleteInput.type = 'hidden';
                        deleteInput.name = 'delete_order';
                        deleteInput.value = '1';

                        form.appendChild(orderIdInput);
                        form.appendChild(deleteInput);
                        document.body.appendChild(form);

                        form.submit();
                    }
                });
            });
        });
    });
    </script>
</body>
</html>
