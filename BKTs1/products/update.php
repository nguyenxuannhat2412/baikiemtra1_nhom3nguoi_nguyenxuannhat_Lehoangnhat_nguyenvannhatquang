<?php
// Mã PHP để lấy thông tin sản phẩm và xử lý cập nhật
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cập Nhật Sản Phẩm</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="../index.php">Trang Chủ</a></li>
                <li><a href="../success.php">Dashboard</a></li>
                <li><a href="index.php">Danh Sách Sản Phẩm</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Cập Nhật Sản Phẩm</h1>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Tên sản phẩm" value="Tên sản phẩm hiện tại" required>
            <input type="number" name="price" placeholder="Giá" value="Giá hiện tại" required>
            <textarea name="description" placeholder="Mô tả sản phẩm">Mô tả hiện tại</textarea>
            <button type="submit">Cập Nhật</button>
        </form>
        <p><a href="index.php">Quay lại danh sách sản phẩm</a></p>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
