<?php
session_start();
?>

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
                <?php include_once('./includes/user_nav.php'); ?>

                <!-- Main Content -->
                <div class="col-md-9 col-lg-9 content">
                    <h2 class="section-title">My Profile</h2>
                    
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" value="<?php echo $_SESSION['name']; ?>" readonly autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" readonly autocomplete="off">
                        </div>
                                            

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