<?php
require_once '../db.php';

$categories = $conn->query("SELECT * FROM categories")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $stmt = $conn->prepare("INSERT INTO products (name, category_id, price, description, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $category_id, $price, $description, $image]);

    header("Location: index.php");
    exit;
}
?>
<h2>Thêm sản phẩm</h2>
<form method="POST">
    Tên sản phẩm: <input type="text" name="name" required><br>
    Danh mục: 
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Giá: <input type="text" name="price" required><br>
    Mô tả: <textarea name="description"></textarea><br>
    Hình ảnh (URL): <input type="text" name="image"><br>
    <button type="submit">Thêm sản phẩm</button>
</form>