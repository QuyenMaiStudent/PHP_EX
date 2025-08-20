<?php require_once "./data.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
</head>
<body>
    <form method="post">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <span style="color:red"><?= $errors['name'] ?? "" ?></span><br>

    Password: <input type="password" name="password">
    <span style="color:red"><?= $errors['password'] ?? "" ?></span><br>

    Email: <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
    <span style="color:red"><?= $errors['email'] ?? "" ?></span><br>

    Profession: <input type="text" name="profession" value="<?= htmlspecialchars($profession) ?>">
    <span style="color:red"><?= $errors['profession'] ?? "" ?></span><br>

    Address (house number, street, district, city): <input type="text" name="address" value="<?= htmlspecialchars($address) ?>">
    <span style="color:red"><?= $errors['address'] ?? "" ?></span><br>

    Role:
    <select name="role">
        <option value="">--Select--</option>
        <option value="admin" <?= $role == "admin" ? "selected" : "" ?>>Admin</option>
        <option value="user" <?= $role == "user" ? "selected" : "" ?>>User</option>
        <option value="guest" <?= $role == "guest" ? "selected" : "" ?>>Guest</option>
    </select>
    <span style="color:red"><?= $errors['role'] ?? "" ?></span><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>