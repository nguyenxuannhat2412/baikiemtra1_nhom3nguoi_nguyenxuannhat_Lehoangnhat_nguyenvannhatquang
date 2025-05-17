<?php
require_once '../db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();

$categories = $conn->query("SELECT * FROM categories")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $stmt = $conn->prepare("UPDATE products SET name = ?, category_id = ?, price = ?, description = ?, image = ? WHERE id = ?");
    $stmt->execute([$name, $category_id, $price, $description, $image, $id]);

    header("Location: index.php");
    exit;
}
?>
<h2>Sửa sản phẩm</h2>
<form method="POST">
    Tên sản phẩm: <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
    Danh mục:
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $product['category_id'] ? 'selected' : '' ?>><?= $cat['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Giá: <input type="text" name="price" value="<?= $product['price'] ?>" required><br>
    Mô tả: <textarea name="description"><?= $product['description'] ?></textarea><br>
    Hình ảnh: <input type="text" name="image" value="<?= $product['image'] ?>"><br>
    <button type="submit">Cập nhật sản phẩm</button>
</form>