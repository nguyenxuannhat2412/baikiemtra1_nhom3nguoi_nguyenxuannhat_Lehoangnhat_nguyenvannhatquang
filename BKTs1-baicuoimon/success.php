<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào Mừng</title>
    <style>
        /* Dán toàn bộ CSS bạn đã cung cấp ở đây */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        h1 {
            font-size: 26px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Hệ Thống</div>
    </header>

    <section>
        <h1>Chào mừng, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Bạn đã đăng nhập thành công.</p>
        <p><a href="logout.php">Đăng Xuất</a></p>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> Hệ Thống Quản Lý
    </footer>
</body>
</html>