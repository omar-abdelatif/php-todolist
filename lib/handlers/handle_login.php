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
    $errors = [];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //! Validation
    if (empty($email)) {
        $errors[] = "Email Is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email Is Not Valid";
    }
    if (empty($password)) {
        $errors[] = "Password Is Required";
    } elseif (strlen($password) < 3) {
        $errors[] = "Password Should Be Greater Than 3 Char..";
    }
    if (empty($errors)) {
        $result = selectUser($email, $password);
        $_SESSION['login'] = $result;
        redirect('../../index.php');
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../../login.php');
        exit;
    }
}
