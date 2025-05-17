<?php
require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
    $stmt->execute([$name, $description]);

    header("Location: index.php");
    exit;
}
?>
<h2>Thêm danh mục sản phẩm</h2>
<form method="POST">
    Tên: <input type="text" name="name" required><br>
    Mô tả: <textarea name="description"></textarea><br>
    <button type="submit">Lưu</button>
</form>