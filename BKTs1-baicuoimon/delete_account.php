<?php
session_start();
require 'db.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Kiểm tra người dùng có tồn tại không
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user) {
        // Nếu tồn tại, xóa người dùng
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$user_id]);

        // Xóa session và chuyển hướng
        session_unset();
        session_destroy();
        header("Location: register.php");
        exit();
    } else {
        echo "Người dùng không tồn tại hoặc đã bị xóa.";
    }
} else {
    echo "Bạn chưa đăng nhập.";
}