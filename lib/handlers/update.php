<?php
session_start();
//! Include Functions
include "../core/functions.php";
//! Include Config
include "../database/config.php";
//! Include Insert
include "../handlers/insert.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $img = $_FILES['img']['name'];
    $path = '../assets/imgs/';
    $location = $path . $img;
    uploadImage($tmp_name, $location);
    updateUser($id, $fname, $lname, $email, $password, $img);
    redirect('../../dashboard.php');
    die;
}
