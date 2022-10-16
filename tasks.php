<?php
//! Header
include "lib/includes/header.php";
//! Include Nav
include "lib/includes/nav.php";
//! Include Functions
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>

<h1 class="text-center text-white mt-5">Tasks Page For The User</h1>

<?php include "lib/includes/footer.php" ?>