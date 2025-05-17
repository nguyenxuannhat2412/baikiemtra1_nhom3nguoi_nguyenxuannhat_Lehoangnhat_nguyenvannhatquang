<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Kết nối cơ sở dữ liệu để lấy danh sách sản phẩm
require 'db.php';

try {
    // Lấy tất cả sản phẩm từ cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT id, name, price, image FROM products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Xử lý lỗi kết nối cơ sở dữ liệu
    $error_message = "Lỗi hệ thống: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Sản Phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Quản Lý Sản Phẩm</div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="logout.php">Đăng Xuất</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Danh Sách Sản Phẩm</h1>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="200">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>Giá: <?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</p>
                    <button>Thêm vào giỏ hàng</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        &copy; 2025 Quản Lý Sản Phẩm
    </footer>
</body>
</html>