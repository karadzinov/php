<?php

require_once "./partials/header.php";


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">


                    <form method="POST" action="/process_register.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Име</label>
                            <input type="text" class="form-control " id="name" aria-describedby="textHelp" name="name"
                                   value="" autocomplete="name" autofocus="">
                            <?php
                            if (isset($_GET['name'])) {
                                echo '<div class="text-danger">' . $_GET['name'] . '</div>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Е-маил адреса</label>
                            <input id="email" type="email" class="form-control " name="email" value=""
                                   autocomplete="email" aria-describedby="emailHelp">
                            <?php
                            if (isset($_GET['email'])) {
                                echo '<div class="text-danger">' . $_GET['email'] . '</div>';
                            }
                            ?>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Лозинка</label>
                            <input id="password" type="password" class="form-control " name="password"
                                   autocomplete="new-password">
                            <?php
                            if (isset($_GET['password'])) {
                                echo '<div class="text-danger">' . $_GET['password'] . '</div>';
                            }
                            ?>
                        </div>
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label">Повторете ја лозинката</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required="" autocomplete="new-password">
                            <?php
                            if (isset($_GET['password_confirmation'])) {
                                echo '<div class="text-danger">' . $_GET['password_confirmation'] . '</div>';
                            }
                            ?>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Регистрирај се</button>
                        <div class="d-flex align-items-center">
                            <p class="fs-4 mb-0 text-dark">Веќе имате профил?</p>
                            <a class="text-primary fw-medium ms-2" href="http://dg.test/login">Логирај се</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once "./partials/footer.php";
?>
