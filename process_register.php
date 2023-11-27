<?php
session_start();

// errors array
$errors = [];
if (!empty($_POST['name']) && isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = '';
    $errors['name'] = "Invalid name!";
}

if (!empty($_POST['email']) && isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
    $errors['email'] = "Invalid email address!";
}


if (!empty($_POST['password']) && isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = '';
    $errors['password'] = "Password is required!";
}

if (!empty($_POST['password_confirmation']) && isset($_POST['password_confirmation'])) {
    $password_confirmation = $_POST['password_confirmation'];
} else {
    $password_confirmation = '';
    $errors['password_confirmation'] = "Password confirmation is required!";
}

if ($password !== $password_confirmation) {
    $errors['password_confirmation'] = "Password don't match";
}

if (empty($errors)) {
//    var_dump($email. ' '. $name . ' ' . $password . ' '. $password_confirmation);
    $myFile = fopen('db.txt', 'a+');
    $data = $email . chr(9) . $name . chr(9) . $password . chr(9) . $password_confirmation . chr(10);
    fwrite($myFile, $data);
    fclose($myFile);

    header('Location: login.php');

} else {
    $_SESSION['errors'] = $errors;
    header('Location: register.php');
}