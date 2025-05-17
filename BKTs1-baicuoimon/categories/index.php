<?php
require_once '../db.php';
$stmt = $conn->query("SELECT * FROM categories");
$categories = $stmt->fetchAll();
?>
<h2>Danh mục sản phẩm</h2>
<a href="create.php">Thêm mới</a>
<table border="1">
<tr><th>ID</th><th>Tên</th><th>Mô tả</th><th>Hành động</th></tr>
<?php foreach ($categories as $category): ?>
<tr>
    <td><?= $category['id'] ?></td>
    <td><?= htmlspecialchars($category['name']) ?></td>
    <td><?= htmlspecialchars($category['description']) ?></td>
    <td>
        <a href="edit.php?id=<?= $category['id'] ?>">Sửa</a> |
        <a href="delete.php?id=<?= $category['id'] ?>" onclick="return confirm('Xóa?')">Xóa</a>
    </td>
</tr>
<?php endforeach; ?>
</table>