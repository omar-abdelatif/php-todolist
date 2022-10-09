<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
if (!isset($_SESSION['login'])) {
    header('location: signout.php');
}


echo "<h1 class='text-white text-center mt-5'>Welcome ya bro </h1>";

include "lib/includes/footer.php";