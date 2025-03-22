<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Giả lập dữ liệu sản phẩm (có thể thay thế bằng dữ liệu thực từ cơ sở dữ liệu)
$products = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => '100.000 VNĐ'],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => '200.000 VNĐ'],
    ['id' => 3, 'name' => 'Sản phẩm 3', 'price' => '150.000 VNĐ']
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="../index.php">Trang Chủ</a></li>
                <li><a href="create.php">Thêm Sản Phẩm</a></li>
                <li><a href="../logout.php">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="table-container">
            <h2>Danh Sách Sản Phẩm</h2>

            <table class="product-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['id']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td class="product-actions">
                                <a href="update.php?id=<?php echo $product['id']; ?>">Sửa</a>
                                <a href="delete.php?id=<?php echo $product['id']; ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="create.php" class="add-product-button">Thêm Sản Phẩm</a>
        </div>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>
