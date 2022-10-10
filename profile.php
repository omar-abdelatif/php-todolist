<?php
session_start();
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

<h1 class='d-flex justify-content-center align-items-center text-white mt-5'>Profile Page</h1>

//! Include Footer
<?php include "lib/includes/footer.php"; ?>