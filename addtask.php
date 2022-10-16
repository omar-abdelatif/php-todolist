<?php
//! Session Start
session_start();
//! Include Functions
include "lib/core/functions.php";
//! Include Header
include "lib/includes/header.php";
//! Include NAV
include "lib/includes/nav.php";
//! Not Auth Redirect
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>
<div class="task_title border border-white border-2 w-50 mx-auto p-3 rounded">
    <h1 class="text-center text-white">Add Task Here</h1>
</div>