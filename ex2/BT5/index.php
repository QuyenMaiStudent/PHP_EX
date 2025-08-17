<?php include "ex5.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Score List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        tr:hover {
            background-color: #e0f7fa;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Student Score List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Year</th>
            <th>UI</th>
            <th>UX</th>
            <th>JS</th>
            <th>AVG</th>
        </tr>
        <?php foreach ($students as $s): ?>
        <tr>
            <td><?php echo $s["id"] ?></td>
            <td><?php echo $s["name"] ?></td>
            <td><?php echo $s["year"] ?></td>
            <td><?php echo $s["scores"]["UI"] ?></td>
            <td><?php echo $s["scores"]["UX"] ?></td>
            <td><?php echo $s["scores"]["JS"] ?></td>
            <td><?php echo $s["avg"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>