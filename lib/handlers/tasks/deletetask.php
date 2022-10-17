<?php
session_start();
include "tasks.php";
include "../../database/config.php";
include "../../core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('../../../signout.php');
}
$id = $_GET['task_id'];
deleteTask($id);
redirect('../../../tasks.php');
