<?php
session_start();
include "insert.php";
include "../core/functions.php";
include "../database/config.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = implode('', $_FILES['img']['name']);
    $tmp_name = implode('', $_FILES['img']['tmp_name']);
    $path = '../assets/imgs/';
    $location = $path . $avatar;
    uploadImage($tmp_name, $location);
    $res = insertUser($fname, $lname, $email, $password, $avatar);
    redirect('../../profile.php');
}
