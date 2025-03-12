<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
        <h2>Đăng Nhập</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật Khẩu" required>
            <button type="submit">Đăng Nhập</button>
        </form>
        <p>Chưa có tài khoản? <a href="register.php">Đăng Ký</a></p>
        <p><a href="reset-password.php">Quên mật khẩu?</a></p>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
