<?php
require_once '../db.php';
$stmt = $conn->query("SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.category_id = c.id");
$products = $stmt->fetchAll();
?>
<h2>Danh sách sản phẩm</h2>
<a href="create.php">Thêm mới</a>
<table border="1">
<tr><th>ID</th><th>Tên</th><th>Danh mục</th><th>Giá</th><th>Mô tả</th><th>Hành động</th></tr>
<?php foreach ($products as $product): ?>
<tr>
    <td><?= $product['id'] ?></td>
    <td><?= htmlspecialchars($product['name']) ?></td>
    <td><?= htmlspecialchars($product['category_name']) ?></td>
    <td><?= $product['price'] ?></td>
    <td><?= htmlspecialchars($product['description']) ?></td>
    <td>
        <a href="edit.php?id=<?= $product['id'] ?>">Sửa</a> |
        <a href="delete.php?id=<?= $product['id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
    </td>
</tr>
<?php endforeach; ?>
</table>