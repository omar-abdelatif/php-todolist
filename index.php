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

<h1 class='text-white text-center mt-5'>Welcome ya bro <?php echo $_SESSION['login']['fname'] ?> <?php echo $_SESSION['login']['lname'] ?></h1>

<?php include "lib/includes/footer.php"; ?>