<?php

session_start();

include "lib/includes/header.php";

include "lib/includes/nav.php";

include "lib/includes/footer.php";

echo $_SESSION['login']['email'];