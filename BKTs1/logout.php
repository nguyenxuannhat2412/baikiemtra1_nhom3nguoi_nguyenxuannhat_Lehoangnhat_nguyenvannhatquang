<?php
session_start();

// Hủy session khi đăng xuất
session_unset();
session_destroy();

// Chuyển hướng về trang đăng nhập
header("Location: login.php");
exit();
?>
