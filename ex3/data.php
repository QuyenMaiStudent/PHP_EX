<?php

$errors = [];
$name = $password = $email = $profession = $address = $role = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"] ?? "");
    if (strlen($name) < 5) {
        $errors['name'] = "Name must be at least 5 characters.";
    }

    $password = $_POST["password"] ?? "";
    if (strlen($password) < 6 || !preg_match('/[A-Z]/', $password) || !preg_match('/[\W_]/', $password)) {
        $errors['password'] = "Password must be at least 6 characters, contain 1 uppercase and 1 special character.";
    }

    $email = trim($_POST["email"] ?? "");
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    $profession = trim($_POST["profession"] ?? "");
    if ($profession == "") {
        $errors['profession'] = "Profession is required.";
    }

    $address = trim($_POST["address"] ?? "");
    $addressParts = preg_split('/,/', $address);
    if (count($addressParts) < 4) {
        $errors['address'] = "Address must include house number, street, district, and city (separated by commans).";
    }

    $validRoles = ["admin", "user", "guest"];
    $role = $_POST["role"] ?? "";
    if (!in_array($role, $validRoles)) {
        $errors['role'] = "Role must be one of: admin, user, guest.";
    }
}