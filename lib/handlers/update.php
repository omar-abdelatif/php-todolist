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
    $img = implode('', $_FILES['img']['name']);
    updateUser($id, $fname, $lname, $email, $password, $img);
    redirect('../../dashboard.php');
}

echo "hello from update page";