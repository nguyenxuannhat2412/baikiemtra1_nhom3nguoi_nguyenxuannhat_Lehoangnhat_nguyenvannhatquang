<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
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
        <h2>Đăng Ký Tài Khoản</h2>
        <form action="register.php" method="POST">
            <input type="text" name="fullname" placeholder="Họ Tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật Khẩu" required>
            <input type="password" name="confirm_password" placeholder="Xác Nhận Mật Khẩu" required>
            <button type="submit">Đăng Ký</button>
        </form>
        <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
