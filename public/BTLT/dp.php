<?php
$SERVER = "172.27.192.1:3306";
$USERNAME = "root";
$PASSWORD = "root";
$DBNAME = "work_management";

// Kết nối đến MySQL
$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);

// Kiểm tra kết nối
if (!$conn) {
    // Nếu không kết nối được, thông báo lỗi và thoát
    die("Không kết nối được vào MySQL server: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công";
}

// Đóng kết nối
mysqli_close($conn);
