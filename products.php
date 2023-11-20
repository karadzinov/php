<?php

require_once "./partials/header.php";

require_once "function.php";

$products = showProducts();

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($products as $key => $product) {
                    echo '<tr>
                          <td>'. $product['name'] .'</td>
                          <td>'. $product['price'].'</td>
                          <td><a href="/product.php?id='.$key.'" class="btn btn-warning">Edit</a></td>
                          <td><a href="/product-delete.php?id='.$key.'" class="btn btn-danger">Delete</a></td>
                          </tr>';
                }
                ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php

require_once "./partials/footer.php";

?>
