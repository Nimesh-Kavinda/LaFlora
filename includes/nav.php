<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand" href="#">LaFlora <i class="fa-solid fa-seedling ms-1"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'about.php') echo 'active'; ?>" href="./about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'shop.php') echo 'active'; ?>" href="./shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'contact.php') echo 'active'; ?>" href="./contact.php">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'wishlist.php') echo 'active'; ?> position-relative" href="./wishlist.php" title="Wishlist">
            <i class="fa-regular fa-heart"></i>
            <?php
              if (isset($_SESSION['user_id'])) {
                $stmt = $conn->prepare('SELECT COUNT(*) as count FROM wishlist WHERE user_id = ?');
                $stmt->execute([$_SESSION['user_id']]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = (int)($result['count'] ?? 0);
                if ($count > 0) {
                  echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-count">'
                      . $count . '</span>';
                } else {
                  echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger wishlist-count" style="display: none;">0</span>';
                }
              }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($current == 'cart.php') echo 'active'; ?> position-relative" href="./cart.php" title="Cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <?php
              if (isset($_SESSION['user_id'])) {
                $stmt = $conn->prepare('SELECT COUNT(*) as count FROM cart WHERE user_id = ?');
                $stmt->execute([$_SESSION['user_id']]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = (int)($result['count'] ?? 0);
                $badgeStyle = $count > 0 ? '' : 'style="display: none;"';
                echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count" ' . $badgeStyle . '>'
                    . $count . '</span>';
              }
            ?>
          </a>
        </li>
         <?php if (isset($_SESSION['name'])) { ?>
           <li class="nav-link"><?php echo htmlspecialchars($_SESSION['name']); ?></li>
         <?php } ?> 
        <?php
            if (isset($_SESSION['name'])) {
                if ($_SESSION['user_type'] == 'admin') {
                    echo '<li class="nav-item">
                            <a class="nav-link <?php if ($current == \'admin/dashboard.php\') echo \'active\'; ?>" href="./admin/dashboard.php" title="Admin Dashboard"><i class="fa-solid fa-user-shield"></i></a>
                          </li>';
                } else
                echo '<li class="nav-item">
                        <a class="nav-link <?php if ($current == \'user/profile.php\') echo \'active\'; ?>" href="./user/profile.php" title="Profile"><i class="fa-regular fa-user"></i></a>
                      </li>';
            } else {
                echo '<li class="nav-item">
                        <a class="nav-link <?php if ($current == \'signin.php\') echo \'active\'; ?>" href="./signin.php" title="Sign In"><i class="fa-regular fa-user"></i></a>
                      </li>';
            }
        ?>
      </ul>
    </div>
  </div>
</nav>