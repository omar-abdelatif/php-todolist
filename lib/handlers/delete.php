<?php
session_start();
include "insert.php";
include "../database/config.php";
include "../core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('../../dashboard.php');
}
$id = $_GET['user_id'];
deleteUser($id);
