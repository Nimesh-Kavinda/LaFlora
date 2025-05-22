<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - LaFlora</title>
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
                <div class="col-md-3 col-lg-3 sidebar">
                    <div class="brand">
                        <!-- LaFlora <span class="brand-icon">❀</span> -->
                      <a class="navbar-brand" href="../../index.html">LaFlora <i class="fa-solid fa-seedling ms-1"></i></a>
                    </div>
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="user-name">Sarah Johnson</div>
                        <div class="user-email">sarah@example.com</div>
                    </div>
                    
                    <div class="mt-4">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="./profile.html"><i class="fas fa-user nav-icon"></i> My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./orders.html"><i class="fas fa-box nav-icon"></i> My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./wishlist.html"><i class="fas fa-heart nav-icon"></i> Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt nav-icon"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9 col-lg-9 content">
                    <h2 class="section-title">My Profile</h2>
                    <form>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" value="Sarah Johnson">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" value="sarah@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" value="(555) 123-4567">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>

                    <div class="password-section">
                        <h3 class="section-title">Change Password</h3>
                        <form>
                            <div class="mb-3">
                                <label for="current-password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current-password">
                            </div>
                            <div class="mb-3">
                                <label for="new-password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new-password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm-password">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>