<?php
//! Include Header
include "lib/includes/header.php";
//! Include Navbar
include "lib/includes/nav.php";
?>
<div class="title border border-3 border-white w-50 mx-auto rounded mt-5">
    <h1 class="p-3 text-center text-white">Sign In</h1>
</div>
<?php if (isset($_SESSION['errors'])) : ?>
    <div class="alert alert-danger w-50 mx-auto mt-5 text-center">
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <p class="text-center">
                <?= $error ?>
            </p>
        <?php endforeach; ?>
        <?php unset($_SESSION['errors']) ?>
    </div>
<?php elseif (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success w-50 mx-auto mt-5">
        <?= $_SESSION['success'] ?>
        <?php unset($_SESSION['success']) ?>
    </div>
<?php endif; ?>
<form action="lib/handlers/handle_login.php" method="POST">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email">
        <input class="form-control" type="password" name="password" placeholder="Enter Password">
        <input type="submit" class="btn btn-primary mt-4 w-100" name="submit" value="Submit">
    </div>
</form>
<?php include "lib/includes/footer.php" ?>