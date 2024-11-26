<?php
require_once 'ngay.php';

$khoangCach = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ngayNguon = new Ngay($_POST['ngayNguon']);
    $ngayDich = new Ngay($_POST['ngayDich']);
    $khoangCach = $ngayNguon->tinhKhoangCach($ngayDich);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Khoảng Cách Giữa Hai Ngày</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }

        #form-container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;  /* Căn giữa các phần tử con */
            justify-content: center;
        }

        input[type="date"] {
            padding: 8px;
            margin: 5px;
            font-size: 16px;
            width: 200px;  /* Đặt chiều rộng cố định cho input */
        }

        button {
            padding: 10px 15px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;  /* Thêm khoảng cách giữa button và các input */
        }

        button:hover {
            background-color: #005bb5;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center; /* Căn giữa các input */
            justify-content: center;
        }

        label {
            width: 120px;
            margin-right: 10px;
            text-align: right;
        }


    </style>
</head>
<body>

<div id="form-container">
    <h2>Tính Khoảng Cách Giữa Hai Ngày</h2>
    <form method="POST" name = "khoangcachform">
        <div>
            <label for="ngayNguon">Ngày nguồn:</label>
            <input type="date" name="ngayNguon" required>
        </div>

        <div>
            <label for="ngayDich">Ngày đích:</label>
            <input type="date" name="ngayDich" required>
        </div>

        <button type="submit">Tính khoảng cách</button>
    </form>

    <?php if ($khoangCach !== null): ?>
        <div class="result">
            Khoảng cách giữa ngày nguồn và ngày đích là: <?php echo $khoangCach; ?> ngày.
        </div>
    <?php endif; ?>
</div>

</body>
</html>
