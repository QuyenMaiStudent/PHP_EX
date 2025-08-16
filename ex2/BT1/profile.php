<?php
$hoTen = "Nguyễn Văn A";
$namSinh = 2000;
$queQuan = "Hà Nội";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Họ tên</th>
            <th>Năm sinh</th>
            <th>Quê quán</th>
        </tr>
        <tr>
            <td><?= $hoTen ?></td>
            <td><?= $namSinh ?></td>
            <td><?= $queQuan ?></td>
        </tr>
    </table>

    <br>

    <?= "Thông tin đã được cập nhật thành công!" ?>
</body>
</html>