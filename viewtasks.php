<?php
//! Header
include "lib/includes/header.php";
//! Include Nav
include "lib/includes/nav.php";
$id = $_GET['user_id'];
echo "this is tasks page for id " . $id;

?>

<h1 class="text-center text-white mt-5">Tasks Page For The Admin</h1>

<?php include "lib/includes/footer.php" ?>