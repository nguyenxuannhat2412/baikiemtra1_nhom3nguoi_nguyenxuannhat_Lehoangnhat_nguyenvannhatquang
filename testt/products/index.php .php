<?php
$products = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => 100],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => 200],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
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
                <a href="create.php" class="btn">Thêm Sản Phẩm</a>
            </nav>
        </div>
    </header>

    <div class="container main-content">
        <h2>Danh Sách Sản Phẩm</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?> VNĐ</td>
                        <td>
                            <a href="update.php?id=<?php echo $product['id']; ?>" class="btn">Sửa</a>
                            <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2025 Quản Lý Sản Phẩm. Tất cả các quyền được bảo vệ.</p>
    </footer>
</body>
</html>
