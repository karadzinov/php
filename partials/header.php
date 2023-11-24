<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>First PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products.php">Products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <?php
           if(isset($_SESSION['user'])) {
                echo "Welcome " . $_SESSION['user'][1]. ' ';
                echo  '<a class="btn btn-info" href="/logout.php">Logout</a>';
           } else {
               echo '<a class="btn btn-info" href="/login.php">Login</a>';
           }
           ?>



        </form>
    </div>
</nav>