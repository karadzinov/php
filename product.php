<?php

require_once "./partials/header.php";
require_once "function.php";

$id = $_GET['id'];
$products = showProducts();

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $products[$id]['name'] ?></h1>
            <h2><?= $products[$id]['price'] ?></h2>
        </div>
    </div>
</div>

<?php

require_once "./partials/footer.php";

?>
