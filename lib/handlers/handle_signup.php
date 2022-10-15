<?php
session_start();
include "insert.php";
include "../core/functions.php";
include "../database/config.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [''];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = implode('', $_FILES['img']['name']);
    $tmp_name = implode('', $_FILES['img']['tmp_name']);
    $img_size = implode('', $_FILES['img']['size']);
    $img_type = implode('', $_FILES['img']['type']);
    $path = '../assets/imgs/';
    $location = $path . $avatar;
    $allowedExt = ['jpg', 'png', 'jpeg', 'gif'];
    //! Validation
    // if (empty($fname)) {
    //     $errors[] = "First Name Is Required";
    // } elseif (strlen($fname) < 3 || strlen($fname) > 10) {
    //     $errors[] = "First Name Should Be Between 3 and 10";
    // }
    // if (empty($password)) {
    //     $errors[] = "Password Is Required";
    // } elseif (strlen($password) < 3) {
    //     $errors[] = "Password Should Be Greater Than 3 Char..";
    // }
    // if (empty($email)) {
    //     $errors[] = "Email Is Required";
    // }
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = "Email Is Not Valid";
    // }
    // if (empty($avatar)) {
    //     $errors[] = "Img Is Required";
    // }
    // if ($img_size > 5000000) {
    //     $errors[] = "The Image Exceeds The Limit";
    // }
    // if ('') {
    //     $errors[] = "Files Extention Is Not Supported";
    // }
    if (empty($errors)) {
        uploadImage($tmp_name, $location);
        insertUser($fname, $lname, $email, $password, $avatar);
        if ($affected >= 1) {
            $_SESSION['success'] = "User Inserted Successfully";
            redirect('../../index.php');
            exit;
        }
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../../register.php');
        exit;
    }
} else {
    redirect('../../error.php');
    exit;
}