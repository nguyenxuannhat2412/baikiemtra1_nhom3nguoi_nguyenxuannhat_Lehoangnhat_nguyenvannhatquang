<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Logo Tùy Chỉnh</h1>
            <nav>
                <a href="index.php">Trang Chủ</a>
                <a href="contact.php">Liên Hệ</a>
                <a href="login.php">Đăng Nhập</a>
                <a href="register.php">Đăng Ký</a>
            </nav>
        </div>
    </header>

    <div class="container main-content">
        <h2>Liên Hệ Với Chúng Tôi</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Họ Tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Chủ Đề" required>
            <textarea name="message" rows="5" placeholder="Nội Dung" required></textarea>
            <button type="submit">Gửi</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
