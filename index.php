<?php
include "lib/core/functions.php";
include "lib/includes/header.php";
include "lib/includes/nav.php";
if (!isset($res)) {
    redirect('signout.php');
}
?>

<h1 class='text-white text-center mt-5'>Welcome ya bro <?php echo $_SESSION['login']['fname'] ?> <?php echo $_SESSION['login']['lname'] ?></h1>

<?php include "lib/includes/footer.php"; ?>