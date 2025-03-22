<?php
session_start();

// Xử lý đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra nếu thông tin đăng nhập đúng với thông tin trong Cookie
    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        $cookie_email = $_COOKIE['email'];
        $cookie_password = $_COOKIE['password'];

        if ($email == $cookie_email && $password == $cookie_password) {
            // Đăng nhập thành công, lưu thông tin vào session
            $_SESSION['user'] = [
                'email' => $cookie_email,
                'username' => $_COOKIE['username']
            ];

            // Chuyển hướng đến trang thành công
            header("Location: success.php");
            exit();
        } else {
            $error_message = "Email hoặc mật khẩu không chính xác.";
        }
    } else {
        $error_message = "Chưa có thông tin đăng ký. Vui lòng đăng ký trước.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="register.php">Đăng Ký</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Đăng Nhập</h1>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Đăng Nhập</button>
        </form>
        <p><a href="register.php">Chưa có tài khoản? Đăng Ký ngay</a></p>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
