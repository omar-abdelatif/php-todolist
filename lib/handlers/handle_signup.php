<?php
session_start();
include "insert.php";
include "../core/functions.php";
include "../database/config.php";
if (!isset($_SESSION['login'])) {
    redirect('../../signout.php');
}

