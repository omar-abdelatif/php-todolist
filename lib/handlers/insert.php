<?php

function connection(){
    return mysqli_connect("localhost", "root", "", "todolist");
}

function insertUser( $fname, $lname, $email, $password ) {
    mysqli_query(connection(), "INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')" );
    return mysqli_affected_rows( connection() );
}

function selectUser( $email, $password ) {
    mysqli_query(connection(), "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = $password" );
}