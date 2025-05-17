<?php
session_start();
require_once 'db.php'; // Kết nối CSDL

// Lấy thông tin người dùng hiện tại
$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT * FROM users WHERE id = ?");
$query->execute([$user_id]);
$user = $query->fetch(PDO::FETCH_ASSOC);

// Xử lý cập nhật thông tin
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $avatar = $_POST['avatar'] ?? null;

    $stmt = $conn->prepare("UPDATE users SET avatar = ? WHERE id = ?");
    $stmt->execute([$avatar, $user_id]);

    header("Location: profile.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hồ sơ cá nhân</title>
</head>
<body>
    <h2>Hồ sơ của bạn</h2>
    <?php if (isset($_GET['success'])) echo "<p>Cập nhật thành công!</p>"; ?>

    <form method="POST">
        <label>Avatar (URL hình ảnh):</label><br>
        <input type="text" name="avatar" value="<?= htmlspecialchars($user['avatar']) ?>"><br><br>

        <!-- Bạn có thể thêm các trường thông tin khác tại đây -->

        <button type="submit">Cập nhật</button>
    </form>

    <?php if ($user['avatar']): ?>
        <p>Hình ảnh hiện tại:</p>
        <img src="<?= htmlspecialchars($user['avatar']) ?>" alt="Avatar" width="150">
    <?php endif; ?>
</body>
</html>