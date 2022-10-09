<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
if (!isset($_SESSION['login'])) {
    header('location: signout.php');
}
include "lib/database/config.php";
?>



<?php include "lib/includes/footer.php"; ?>