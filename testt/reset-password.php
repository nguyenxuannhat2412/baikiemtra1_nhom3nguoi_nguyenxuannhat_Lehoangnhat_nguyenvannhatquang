<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Mật Khẩu</title>
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
        <h2>Quên Mật Khẩu</h2>
        <form action="reset-password.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Reset Mật Khẩu</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
