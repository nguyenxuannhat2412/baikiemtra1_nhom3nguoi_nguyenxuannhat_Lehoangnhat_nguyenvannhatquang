<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Điều Khiển</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Logo Tùy Chỉnh</h1>
            <nav>
                <a href="index.php">Trang Chủ</a>
                <a href="contact.php">Liên Hệ</a>
                <a href="products/index.php">Danh Sách Sản Phẩm</a>
                <a href="logout.php">Đăng Xuất</a>
            </nav>
        </div>
    </header>

    <div class="container main-content">
        <h2>Bảng Điều Khiển</h2>
        <p>Số liệu tổng quan:</p>
        <p>Sản phẩm: 20</p>
        <p>Người dùng: 5</p>
        <p>Đơn hàng: 10</p>
        <a href="products/index.php" class="btn">Danh Sách Sản Phẩm</a>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
