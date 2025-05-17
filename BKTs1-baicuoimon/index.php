<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="about.php">Giới Thiệu</a></li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="success.php">success</a></li>
                    <li><a href="logout.php">Đăng Xuất</a></li>
                <?php else: ?>
                    <li><a href="login.php">Đăng Nhập</a></li>
                    <li><a href="register.php">Đăng Ký</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Chào Mừng Bạn Đến Với Trang Quản Lý Sản Phẩm</h1>
        <p>Chúng tôi cung cấp một hệ thống đơn giản để quản lý các sản phẩm của bạn. Đăng nhập hoặc đăng ký để bắt đầu!</p>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>