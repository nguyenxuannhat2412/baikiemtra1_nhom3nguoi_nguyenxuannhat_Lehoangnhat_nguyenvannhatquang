<?php
session_start();
require 'db.php'; // Kết nối cơ sở dữ liệu

// Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION['user_id'])) {
    header("Location: products.php"); // Chuyển hướng đến trang sản phẩm nếu đã đăng nhập
    exit();
}

// Xử lý đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Kiểm tra email trong cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT id, email, password, username FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra mật khẩu với hàm password_verify
        if ($user && password_verify($password, $user['password'])) {
            // Đăng nhập thành công, lưu thông tin vào session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            // Chuyển hướng đến trang sản phẩm
            header("Location: products.php");
            exit();
        } else {
            // Lỗi đăng nhập
            $error_message = "Email hoặc mật khẩu không chính xác.";
        }
    } catch (PDOException $e) {
        // Xử lý lỗi khi kết nối cơ sở dữ liệu
        $error_message = "Lỗi hệ thống: " . $e->getMessage();
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