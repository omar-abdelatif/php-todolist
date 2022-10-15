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
<h1 class="text-center text-white mt-5">welcome ya <?= $_SESSION['login']['fname'] ?> <?= $_SESSION['login']['lname'] ?></h1>
<h1 class='d-flex justify-content-center align-items-center text-white mt-5'>Profile Page</h1>
<?php include "lib/includes/footer.php"; ?>