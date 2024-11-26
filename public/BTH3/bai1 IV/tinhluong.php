<?php

require_once 'nhanvien.php';
require_once 'nhanviennQl.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $manhanvien = $_POST['manvInput'];
    $tennhanvien = $_POST['nameInput'];  // Sửa dấu ngoặc đơn thành ngoặc vuông
    $songay = (int)$_POST['dateInput'];  // Sửa dấu ngoặc đơn thành ngoặc vuông
    $luongngay = (float)$_POST['luongInput'];  // Sửa dấu ngoặc đơn thành ngoặc vuông
    $isquanli = isset($_POST['quanliInput']) && $_POST['quanliInput'] == 'on';  // Sửa dấu ngoặc đơn thành ngoặc vuông

    if ($isquanli) {
        $nhanvien = new nhanvienQl();
    } else {
        $nhanvien = new nhanvien();
    }

    $nhanvien->Gan($manhanvien, $tennhanvien, $songay, $luongngay);

    $nhanvien->InNhanVien();
}
