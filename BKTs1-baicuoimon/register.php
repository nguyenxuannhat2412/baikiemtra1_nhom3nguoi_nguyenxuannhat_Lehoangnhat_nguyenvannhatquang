<?php
session_start();
require 'db.php'; // Kết nối cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form đăng ký
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Kiểm tra các lỗi
    $errors = [];
    if (empty($username)) {
        $errors[] = "Tên người dùng không được để trống.";
    }
    if (empty($email)) {
        $errors[] = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    }
    if (empty($password)) {
        $errors[] = "Mật khẩu không được để trống.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Mật khẩu và xác nhận mật khẩu không khớp.";
    }

    // Kiểm tra xem email đã tồn tại chưa
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $errors[] = "Email đã được sử dụng. Vui lòng chọn email khác.";
        }
    }

    // Nếu không có lỗi, lưu thông tin vào cơ sở dữ liệu
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Mã hóa mật khẩu

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashed_password]);

        // Chuyển hướng người dùng đến trang đăng nhập
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="login.php">Đăng Nhập</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Đăng Ký</h1>
        <?php if (!empty($errors)): ?>
            <ul style="color: red;">
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="POST" action="register.php">
            <input type="text" name="username" placeholder="Tên người dùng" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <input type="password" name="confirm_password" placeholder="Xác nhận mật khẩu" required>
            <button type="submit">Đăng Ký</button>
        </form>
        <p><a href="login.php">Đã có tài khoản? Đăng nhập ngay</a></p>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>