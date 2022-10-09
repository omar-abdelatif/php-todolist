<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location: signout.php");
}

include "lib/includes/header.php";

include "lib/includes/nav.php";

echo "<h1 class='text-white text-center mt-5'>Welcome ya bro </h1>";

echo "<pre>";
print_r($_SESSION['login']);

include "lib/includes/footer.php";