<?php
//! Start Session
session_start();
//! Include Functions
include "../../core/functions.php";
//! Include Config
include "../../database/config.php";
//! Include Tasks
include "tasks.php";
//! Auth
if (!isset($_SESSION['login'])) {
    redirect('../../../signout.php');
}

//! Add TODO SCRIPT
if (isset($_POST['submit'])) {
    $errors = [];
    $title = $_POST['title'];
    $date = $_POST['date'];
    //! Validation
    if (empty($title)) {
        $errors[] = "Title Is Required";
    } elseif (isRealDate($date)) {
        $errors[] = "Date Is Required";
    }
    if (empty($errors)) {
        $result = insertTask($title, $date);
        redirect('../../../tasks.php');
        $_SESSION['success'] = 'Task Inserted Successfully';
    } else {
        $_SESSION['errors'] = $errors;
        // redirect('../../../addtask.php');
        exit;
    }
}