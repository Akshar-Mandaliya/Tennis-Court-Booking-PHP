<?php
include "connection.php";
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
$user_name = $_POST["user_name"];
$user_password = $_POST["user_password"];
$stmtAdmin = $conn->prepare("SELECT * FROM admins WHERE admin_name = ? AND admin_password = ?");
$stmtAdmin->bind_param("ss", $user_name, $user_password);
$stmtAdmin->execute();
$resultAdmin = $stmtAdmin->get_result();
$stmtUser = $conn->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
$stmtUser->bind_param("ss", $user_name, $user_password);
$stmtUser->execute();
$resultUser = $stmtUser->get_result();
if ($rowAdmin = $resultAdmin->fetch_assoc()) {
    $_SESSION["admin"] = $rowAdmin;
    echo '<script>alert("Welcome To Admin Pannel ..."); window.location.href="add.php"; </script>';
} elseif ($rowUser = $resultUser->fetch_assoc()) {
    $_SESSION['user'] = $rowUser;
    echo '<script>alert("Welcome To User Pannel ..."); window.location.href="index.php"; </script>';
} else {
    echo '<script>alert("Failed Login ..."); window.location.href="Login.php";</script>';
}
$stmtAdmin->close();
$stmtUser->close();
$conn->close();
?>