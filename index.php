<?php
session_start();
include "lib/core/functions.php";
// if (!isset($_SESSION['login'])) {
//     redirect('signout.php');
// } else {
//     redirect('index.php');
// }
include "lib/includes/header.php";
include "lib/includes/nav.php";
?>

<h1 class='text-white text-center mt-5'>Welcome ya bro </h1>

<?php include "lib/includes/footer.php"; ?>