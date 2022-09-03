<?php

// Include Header
include "lib/includes/header.php";

// Include Navbar
include "lib/includes/nav.php";

// Include Connection
include "lib/database/config.php";

// Include Insert Users
include "lib/handlers/insert.php";


// Login Script

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    selectUser($mail, $password);
}

?>

<form action="login.php" method="post">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <h1 class="title border border-3 border-dark mb-5 text-dark p-3 text-center rounded">Sign In</h1>
        <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email">
        <input class="form-control" type="Password" name="Password" placeholder="Enter Password">
        <button type="submit" class="btn btn-primary mt-4 w-100" name="submit">Submit</button>
    </div>
</form>