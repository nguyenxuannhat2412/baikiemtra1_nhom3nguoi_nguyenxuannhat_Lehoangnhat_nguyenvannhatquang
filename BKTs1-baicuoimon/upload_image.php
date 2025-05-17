<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">Quản lý Sản phẩm</div>
</header>

<section>
    <h1>Thêm sản phẩm mới</h1>
    <form action="upload_image.php" method="POST" enctype="multipart/form-data">
        <label for="product_name">Tên sản phẩm:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="product_image">Chọn hình ảnh:</label>
        <input type="file" id="product_image" name="product_image" accept="image/*"><br><br>

        <!-- Hiển thị hình ảnh từ URL -->
        <label>Hình ảnh mẫu:</label><br>
        <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/340/361/products/7-c640ba72-6828-4494-9f4d-356628abf9ab.jpg?v=1722053355330" alt="Hình ảnh mẫu" width="200"><br><br>

        <input type="submit" name="submit" value="Tải lên hình ảnh">
    </form>
</section>

<footer>
    <p>&copy; 2025 Quản lý sản phẩm</p>
</footer>

</body>
</html>