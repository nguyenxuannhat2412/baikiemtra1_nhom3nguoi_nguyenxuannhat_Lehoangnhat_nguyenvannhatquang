<?php
require_once '../db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM categories WHERE id = ?");
$stmt->execute([$id]);
$category = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE categories SET name = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $description, $id]);

    header("Location: index.php");
    exit;
}
?>
<h2>Sửa danh mục sản phẩm</h2>
<form method="POST">
    Tên: <input type="text" name="name" value="<?= $category['name'] ?>" required><br>
    Mô tả: <textarea name="description"><?= $category['description'] ?></textarea><br>
    <button type="submit">Cập nhật</button>
</form>