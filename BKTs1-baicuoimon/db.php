<?php
// Cấu hình kết nối cơ sở dữ liệu
$host = 'localhost';       // Địa chỉ host của cơ sở dữ liệu
$dbname = 'product_management'; // Tên cơ sở dữ liệu
$username = 'root';        // Tên người dùng CSDL
$password = '';            // Mật khẩu (nếu có)
$charset = 'utf8mb4';      // Mã hóa ký tự

// DSN cho kết nối PDO
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Các tùy chọn kết nối
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Báo lỗi nếu có sự cố
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  // Lấy dữ liệu dưới dạng mảng kết hợp
];

try {
    // Tạo kết nối PDO
    $conn = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Nếu kết nối không thành công, in ra thông báo lỗi
    die("Kết nối thất bại: " . $e->getMessage());
}
?>