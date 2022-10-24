<?php
session_start();
//! Include Tasks
include "tasks.php";
//! Include Config
include "../../database/config.php";
//! Include Function
include "../../core/functions.php";
//! Auth of Login
if (!isset($_SESSION['login'])) {
    redirect('../../../login.php');
}
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    updateTask($id, $title, $date);
    redirect('../../../tasks.php');
    die;
}
