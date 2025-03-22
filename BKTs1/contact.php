<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên Hệ</title>
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
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <form method="POST" action="">
            <input type="text" name="fullname" placeholder="Họ và tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Chủ đề" required>
            <textarea name="message" placeholder="Nội dung" required></textarea>
            <button type="submit">Gửi Thông Tin</button>
        </form>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
