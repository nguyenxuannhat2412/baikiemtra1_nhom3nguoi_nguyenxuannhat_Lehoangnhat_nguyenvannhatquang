<?php
session_start();
require 'db.php'; // Kết nối đến cơ sở dữ liệu

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    try {
        // Xóa tài khoản khỏi CSDL
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$user_id]);

        // Kiểm tra xem xóa thành công hay chưa
        if ($stmt->rowCount() > 0) {
            // Xóa session
            session_unset();
            session_destroy();
            
            // Chuyển hướng về trang đăng ký với thông báo thành công
            header("Location: register.php?status=success");
            exit();
        } else {
            // Nếu không có tài khoản nào bị xóa
            header("Location: register.php?status=error");
            exit();
        }
    } catch (PDOException $e) {
        // Xử lý lỗi khi xóa tài khoản
        echo "Lỗi khi xóa tài khoản: " . $e->getMessage();
    }
} else {
    // Nếu không có session đăng nhập
    header("Location: register.php");
    exit();
}