<?php
session_start();
include "insert.php";
include "../core/functions.php";
include "../database/config.php";
include "../core/validations.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}
$error = [];

if (!requiredVal($fname)) {
    $errors[] = 'First Name is required';
} elseif (!requiredVal($lname)) {
    $errors[] = 'Last Name is required';
} elseif (!minVal($fname, 3)) {
    $errors[] = 'First Name must be at least 3 characters';
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



    redirect('../../index.php');
}
