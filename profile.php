<?php

// Include Header
include "lib/includes/header.php";
// Include Navbar
include "lib/includes/nav.php";
// Include Functions
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}


echo "<h1 class='d-flex justify-content-center align-items-center text-white'>Profile Page</h1>";

// Include Footer
include "../lib/includes/footer.php";