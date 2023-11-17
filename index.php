<?php


if(!empty($_GET['first_name']) && isset($_GET['first_name'])) {
    $first_name = $_GET['first_name'];
} else {
    $first_name = "Unknown";
}


if(!empty($_GET['last_name']) && isset($_GET['last_name'])) {
    $last_name = $_GET['last_name'];
} else {
    $last_name = "Unknown";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>First PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row">
        <h1>Welcome <?php echo $first_name . " " . $last_name; ?></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/process.php" method="post" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control input-group" id="inputEmail4" placeholder="Email" name="email">
                        <?php

                        if(isset($_GET["email"])) {
                            echo '<div class="text-danger">'. $_GET["email"] .'</div>';
                        }


                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                        <?php

                        if(isset($_GET["password"])) {
                            echo '<div class="text-danger">'. $_GET["password"] .'</div>';
                        }


                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                    <?php

                    if(isset($_GET["address"])) {
                        echo '<div class="text-danger">'. $_GET["address"] .'</div>';
                    }


                    ?>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
                    <?php

                    if(isset($_GET["address2"])) {
                        echo '<div class="text-danger">'. $_GET["address2"] .'</div>';
                    }


                    ?>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                        <?php

                        if(isset($_GET["city"])) {
                            echo '<div class="text-danger">'. $_GET["city"] .'</div>';
                        }


                        ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state">
                            <option selected>Choose...</option>
                            <option value="mk">Macedonia</option>
                            <option value="rs">Serbia</option>
                        </select>

                        <?php

                        if(isset($_GET["state"])) {
                            echo '<div class="text-danger">'. $_GET["state"] .'</div>';
                        }


                        ?>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                        <?php

                        if(isset($_GET["zip"])) {
                            echo '<div class="text-danger">'. $_GET["zip"] .'</div>';
                        }


                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="iagree">
                        <?php

                        if(isset($_GET["iagree"])) {
                            echo '<div class="text-danger">'. $_GET["iagree"] .'</div>';
                        }


                        ?>
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>