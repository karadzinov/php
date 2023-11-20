<?php

$message = 'Hello from process';

$niza = ["test", "eden", "dva"];


$indexNiza = [
    "poraka" => "Prv element",
    "vtoro" => "Tekst nekoj"
];


// var_dump($_POST);

// print_r($_POST);


$errors = [];


if(!empty($_POST['email']) && isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $errors["email"] = "Invalid Email Address";
}

if(!empty($_POST['password']) && isset($_POST['password'])) {
    $password = $_POST['password'];
}  else {
    $errors["password"] = "Invalid Password";
}

if(!empty($_POST['address']) && isset($_POST['address'])) {
    $address = $_POST['address'];
}  else {
    $errors["address"] = "Please fill out Address";
}


if(!empty($_POST['address2']) && isset($_POST['address2'])) {
    $address2 = $_POST['address2'];
}  else {
    $errors["address2"] = "This filed is required!";
}


if(!empty($_POST['city']) && isset($_POST['city'])) {
    $city = $_POST['city'];
}  else {
    $errors["city"] = "This filed is required!";
}


if(!empty($_POST['zip']) && isset($_POST['zip'])) {
    $zip = $_POST['zip'];
}  else {
    $errors["zip"] = "This filed is required!";
}

if(!empty($_POST['state']) && isset($_POST['state'])) {
    $state = $_POST['state'];
}  else {
    $errors["state"] = "This filed is required!";
}


if(!empty($_POST['iagree']) && isset($_POST['iagree'])) {
    $iagree = true;
}  else {
    $iagree = false;
    $errors["iagree"] = "You must accept our terms and conditions!";
}




$errorStr = http_build_query($errors, '&amp;'); // & email=Martin&password=fjfj...


if(!empty($errorStr)) {
    header('Location: index.php?'.$errorStr);
} else {
    echo "Email: $email, Password: $password, Address: $address, Address 2:  $address2, City: $city, Zip: $zip, State: $state, I Agree: $iagree";
}



//


// echo $email . " Password: "  . $password;


// print_r($niza[0]);



