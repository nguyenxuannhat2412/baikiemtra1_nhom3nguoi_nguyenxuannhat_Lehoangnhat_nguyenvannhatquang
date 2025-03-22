<?php
// Mã PHP để xử lý thêm sản phẩm
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="../index.php">Trang Chủ</a></li>
                <li><a href="../success.php">success</a></li>
                <li><a href="index.php">Danh Sách Sản Phẩm</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Thêm Sản Phẩm Mới</h1>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Tên sản phẩm" required>
            <input type="number" name="price" placeholder="Giá" required>
            <textarea name="description" placeholder="Mô tả sản phẩm"></textarea>
            <button type="submit">Thêm Sản Phẩm</button>
        </form>
        <p><a href="index.php">Quay lại danh sách sản phẩm</a></p>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
