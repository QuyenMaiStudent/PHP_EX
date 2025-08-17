<?php include "ex6.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 6</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
        </tr>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p["name"] ?></td>
            <td <? if ($p["price"] > 1000000) echo 'style="background:yellow"'  ?>><?= $p["price"] ?></td>
            <td><?= $p["desc"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>