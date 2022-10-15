<?php
function requiredVal($input){
    if(empty($input)){
        return false;
    }
    return true;
}
function minVal($input, $length){
    if (strlen($input) < $length) {
        return false;
    }
    return true;
}
function maxVal($input, $length){
    if (strlen($input) > $length) {
        return false;
    }
    return true;
}
function emailVal($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}
function emailExistence($email)
{
    $connection = connection();
    $select = "SELECT `email` FROM `users`";
    $query = mysqli_query($connection, $select);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    foreach ($result as $res) {
        if ($email == $res['email']) {
            return true;
        }
        return true;
    }
}
function passwordExistance($password)
{
    $connection = connection();
    $select = "SELECT * FROM `users`";
    $query = mysqli_query($connection, $select);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    foreach ($result as $res) {
        if ($password !== $res['password']) {
            return false;
        }
        return true;
    }
}
function imgSizeVal($img_size)
{
    if ($img_size > 5000000) {
        return false;
    }
    return true;
}