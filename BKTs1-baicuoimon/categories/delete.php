<?php
require_once '../db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
?>