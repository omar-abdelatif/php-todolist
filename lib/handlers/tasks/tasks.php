<?php
//! Functions
function insertTask($title, $date)
{
    $connection = connection();
    $taskSelect = "INSERT INTO `tasks` (`title`,`date`) VALUES ('$title','$date')";
    mysqli_query($connection, $taskSelect);
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
function deleteUser($id)
{
    $connection = connection();
    $query = "DELETE FROM `tasks` WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateTask($id, $title, $date)
{
    $connection = connection();
    $query = "UPDATE `users` SET `title` = '$title', `date` = '$date' WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function tasks()
{
    $connection = connection();
    $query = "SELECT * FROM `tasks`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function isRealDate($date)
{
    if (false === strtotime($date)) {
        return false;
    }
    list($year, $month, $day) = explode('-', $date);
    return checkdate($month, $day, $year);
}