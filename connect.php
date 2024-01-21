<?php
$dbHost = "localhost:3306";
$dbUser = "root";
$dbPass = "@Cancot123";
$dbName = "crud";
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
else
{
    echo "Sucessfully";
}
?>
