<?php
//! Include Header
include "lib/includes/header.php";
//! Include Navbar
include "lib/includes/nav.php";
//! Include Functions
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>
<div class="data text-center mt-5 w-50 mx-auto">
    <div class="img mt-5">
        <img src="lib/assets/imgs/<?= $_SESSION['login']['img'] ?>" alt="" class="rounded-circle" width="250">
    </div>
    <h1 class="text-white border border-2 border-white p-3 bg-success mt-5">
        User ID: <?= $_SESSION['login']['id'] ?>
    </h1>
    <h1 class="text-white border border-2 border-white p-3 bg-success mt-5">
        Full Name: <?= $_SESSION['login']['fname'] ?> <?= $_SESSION['login']['lname'] ?>
    </h1>
    <h1 class="text-white border border-2 border-white p-3 bg-primary mt-5">
        Email: <?= $_SESSION['login']['email'] ?>
    </h1>
    <h1 class="text-white border border-2 border-white p-3 bg-primary mt-5">
        Password: <?= $_SESSION['login']['password'] ?>
    </h1>
    <h1 class="text-white border border-2 border-white p-3 bg-primary mt-5">
        Img: <?= $_SESSION['login']['img'] ?>
    </h1>
</div>
<?php include "lib/includes/footer.php"; ?>