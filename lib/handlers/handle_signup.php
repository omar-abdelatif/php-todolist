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

if (isset($_POST['submit'])) {
    if (empty($errors)) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = implode('', $_FILES['img']['name']);
        $tmp_name = implode('', $_FILES['img']['tmp_name']);
        $img_size = implode('', $_FILES['img']['size']);
        $path = '../assets/imgs/';
        $location = $path . $avatar;
        uploadImage($tmp_name, $location);
        if (!requiredVal($fname)) {
            $errors[] = 'First Name is required';
        } elseif (!minVal($fname, 3)) {
            $errors[] = 'First Name must be at least 3 characters';
        }
        if (!requiredVal($lname)) {
            $errors[] = 'Last Name is required';
        } elseif (!minVal($lname, 3)) {
            $errors[] = 'Last Name must be at least 3 characters';
        }
        if (!requiredVal($email)) {
            $errors[] = 'Email is required';
        } elseif (!emailVal($email)) {
            $errors[] = 'Plz Insert Valid Email';
        } elseif (emailExistence($email)) {
            $errors[] = 'Email already exists';
        }
        if (imgSizeVal($img_size)) {
            $errors[] = "Image Size Exceeds The Limit";
        }
        $res = insertUser($fname, $lname, $email, $password, $avatar);
        $_SESSION['sucess'] = $sucess;
        redirect('../../index.php');
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../../signout.php');
    }
}
