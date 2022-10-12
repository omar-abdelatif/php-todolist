<?php
// Include Header
include "lib/includes/header.php";
// Include Navbar
include "lib/includes/nav.php";
//! Include Connection
include "lib/database/config.php";
//! Include Insert Users
include "lib/handlers/insert.php";
//! Include Functions
include "lib/core/functions.php";
//! Include Validation
include "lib/core/validations.php";
//! Login Script
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = selectUser($email, $password);
    if (isset($res)) {
        $_SESSION['login'] = $res;
        redirect('index.php');
    }
}
?>
<form action="login.php" method="post">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <h1 class="title border border-3 border-dark mb-5 text-dark p-3 text-center rounded">Sign In</h1>
        <?php if (isset($_SESSION['errors'])) : ?>
            <?php foreach ($_SESSION['errors'] as $error) : ?>
                <div class="mt-5 w-50 mx-auto alert alert-danger text-center">
                    <?php echo $error; ?>
                </div>
            <?php endforeach ?>
        <?php endif ?>
        <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email">
        <input class="form-control" type="password" name="password" placeholder="Enter Password">
        <input type="submit" class="btn btn-primary mt-4 w-100" name="submit" value="Submit">
    </div>
</form>