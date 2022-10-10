<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
if (!isset($_SESSION['login'])) {
    header('location: signout.php');
}
include "lib/database/config.php";
?>

<h1 class="text-center text-white mt-5">Dashboard Page</h1>



<?php include "lib/includes/footer.php"; ?>