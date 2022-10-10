<?php
function insertUser( $fname, $lname, $email, $password ) {
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')");
    return mysqli_affected_rows($connection);
}
function selectUser( $email, $password ) {
    $connection = connection();
    $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($res);
}
function deleteUser($id){
    $connection = connection();
    $query = "DELETE FROM `users` WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateUser($id, $name, $email, $password, $img){
    $connection = connection();
    $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password', `img` = '$img' WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function users(){
    $connection = connection();
    $query = "SELECT * FROM `users`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function uploadImage(){
    
}