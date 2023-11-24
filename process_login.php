<?php
session_start();

// errors array
$errors = [];


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


if (empty($errors)) {
    $db = fopen('db.txt', 'r');
    $users = fread($db,filesize("db.txt"));
    fclose($db);


    $users = explode("\n", $users);

    foreach($users as $user) {

        $userData = explode("\t", $user);
        $user_email  = $userData[0];
        $user_password =  $userData[2];

        if(($user_email === $email) && ($user_password === $password)) {
            $_SESSION['user'] = $userData;
            header('Location: index.php');
        }

    }

   // header('Location: index.php');

} else {
    $php_errormsg = http_build_query($errors, '&amp;');
    header('Location: register.php?' . $php_errormsg);
}