<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>

<h1 class='text-white text-center mt-5'>Welcome ya bro </h1>

<?php include "lib/includes/footer.php"; ?>