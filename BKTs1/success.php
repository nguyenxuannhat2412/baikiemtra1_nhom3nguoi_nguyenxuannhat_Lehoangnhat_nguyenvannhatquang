<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Giả lập dữ liệu tổng quan (bạn có thể thay thế bằng dữ liệu từ cơ sở dữ liệu)
$total_products = 50;
$total_users = 120;
$total_orders = 200;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng Điều Khiển</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="products/index.php">Danh Sách Sản Phẩm</a></li>
                <li><a href="logout.php">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Bảng Điều Khiển</h1>
        <p>Chào mừng, <?php echo $_SESSION['user']['username']; ?>!</p>

        <div class="dashboard-summary">
            <div class="dashboard-item">
                <h2>Sản Phẩm</h2>
                <p><?php echo $total_products; ?> sản phẩm</p>
            </div>
            <div class="dashboard-item">
                <h2>Người Dùng</h2>
                <p><?php echo $total_users; ?> người dùng</p>
            </div>
            <div class="dashboard-item">
                <h2>Đơn Hàng</h2>
                <p><?php echo $total_orders; ?> đơn hàng</p>
            </div>
        </div>

        <div>
            <a href="products/index.php" class="button">Xem Danh Sách Sản Phẩm</a>
        </div>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
