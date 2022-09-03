<?php

// Session Start
session_start();

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
    $res = selectUser($email, $password);
    // print_r($res); die;
    if(isset($res)){
        $_SESSION['login'] = $res;
        header("location: index.php");
    } else {
        header("location: login.php");
    }
}

?>

<form action="login.php" method="post">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <h1 class="title border border-3 border-dark mb-5 text-dark p-3 text-center rounded">Sign In</h1>
        <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email">
        <input class="form-control" type="password" name="password" placeholder="Enter Password">
        <input type="submit" class="btn btn-primary mt-4 w-100" name="submit" value="Submit">
    </div>
</form>