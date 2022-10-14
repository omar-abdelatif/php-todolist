<?php
session_start();
include "insert.php";
include "../core/functions.php";
include "../database/config.php";
include "../core/validations.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}
//! Login Script
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = selectUser($email, $password);
    $_SESSION['login'] = $result;
    redirect('../../index.php');
}
