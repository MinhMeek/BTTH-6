<?php
$servername = "localhost";
$username = "root"; // Tài khoản MySQL của bạn
$password = ""; // Mật khẩu MySQL
$dbname = "QuanLyThongTin"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
