<?php
//! Include Header
include "lib/includes/header.php";
//! Include Navbar
include "lib/includes/nav.php";
?>
<div class="title border border-3 border-white w-50 mx-auto rounded mt-5">
    <h1 class="p-3 text-center text-white ">Sign Up</h1>
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
<form action="lib/handlers/handle_signup.php" method="post" enctype="multipart/form-data">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <input type="text" name="fname" class="form-control mb-3 border-dark border border-2" placeholder="First Name">
        <input type="text" name="lname" class="form-control mb-3 border-dark border border-2" placeholder="Last Name">
        <input class="form-control mb-3 border-dark border border-2" type="email" name="email" placeholder="Enter Email">
        <input class="form-control border-dark border border-2 mb-3" type="password" name="password" placeholder="Enter Password">
        <input type="file" name="img[]" class="form-control border-dark border border-2">
        <button type="submit" class="btn btn-primary mt-4 w-100" name="submit">Submit</button>
    </div>
</form>
<?php include "lib/includes/footer.php" ?>