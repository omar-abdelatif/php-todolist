<?php
include "lib/includes/header.php";
include "lib/includes/nav.php";
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>

<h1 class="text-center text-white mt-5">Tasks Page</h1>