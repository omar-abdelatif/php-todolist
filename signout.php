<?php

session_start();

include "lib/core/functions.php";

session_destroy();

redirect('login.php');