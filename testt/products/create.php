<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Logo Tùy Chỉnh</h1>
            <nav>
                <a href="../index.php">Trang Chủ</a>
                <a href="../contact.php">Liên Hệ</a>
                <a href="../login.php">Đăng Nhập</a>
            </nav>
        </div>
    </header>

    <div class="container main-content">
        <h2>Thêm Sản Phẩm Mới</h2>
        <form action="create.php" method="POST">
            <input type="text" name="name" placeholder="Tên sản phẩm" required>
            <input type="number" name="price" placeholder="Giá sản phẩm" required>
            <button type="submit">Thêm sản phẩm</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
