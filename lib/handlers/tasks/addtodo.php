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
    $user_id = $_SESSION['login']['id'];
    // echo $user_id;
    // die;
    //! Validation
    if (empty($title)) {
        $errors[] = "Title Is Required";
    }
    if (!strtotime($date)) {
        $errors[] = "Invalid Date";
    }
    if (empty($errors)) {
        insertTask($title, $date, $user_id);
        $_SESSION['success'] = 'Task Inserted Successfully';
        redirect('../../../tasks.php');
    } else {
        $_SESSION['errors'] = $errors;
        redirect('../../../addtask.php');
        exit;
    }
}