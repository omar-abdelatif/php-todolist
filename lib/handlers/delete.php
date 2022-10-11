<?php
session_start();
include "insert.php";
include "../database/config.php";
include "../core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}
$id = $_GET['user_id'];
deleteWithImage($id);
// deleteUser($id);
redirect('../../dashboard.php');