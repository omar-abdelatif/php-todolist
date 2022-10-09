<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
