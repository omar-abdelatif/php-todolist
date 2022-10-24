<?php
//! Session Start
session_start();
//! Insert Tasks
include "tasks.php";
//! Insert Config
include "../../database/config.php";
//! Insert Functions
include "../../core/functions.php";
//! Admin Auth
if (!isset($_SESSION['login'])) {
    redirect('../../../signout.php');
}
