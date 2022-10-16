<?php
//! Start Session
session_start();
//! Include Functions
include "lib/core/functions.php";
//! Destroy Session
session_destroy();
//! Redirect
redirect('login.php');