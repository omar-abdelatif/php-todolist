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

$sucess = [];

//! Login Script
if (isset($_POST['submit'])) {
    if (empty($errors)) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $res = selectUser($email, $password);
        if (!requiredVal($email)) {
            $errors[] = 'Email is required';
        } elseif (!emailVal($email)) {
            $errors[] = 'Plz Insert Valid Email';
        } elseif (emailExistence($email)) {
            $errors[] = 'Email already exists';
        }
        if (!requiredVal($password)) {
            $errors[] = 'Password is required';
        } elseif (!minVal($password, 8)) {
            $errors[] = 'Password must be at least 8 characters';
        } elseif (!maxVal($password, 20)) {
            $errors[] = 'Password must be less than 20 characters';
        }
        if (isset($res)) {
            $_SESSION['login'] = $res;
            redirect('index.php');
        }
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../../signout.php');
        die();
    }
}
