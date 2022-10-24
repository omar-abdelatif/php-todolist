<?php
//! Functions
function insertTask($title, $date, $user_id)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `tasks` (`title`,`date`, `user_id`) VALUES ('$title','$date', $user_id)");
    return mysqli_affected_rows($connection);
}
function deleteTask($id)
{
    $connection = connection();
    mysqli_query($connection, "DELETE FROM `tasks` WHERE `id` = $id");
    return mysqli_affected_rows($connection);
}
function updateTask($id, $title, $date)
{
    $connection = connection();
    mysqli_query($connection, "UPDATE `tasks` SET `title` = '$title', `date` = '$date' WHERE `id` = $id");
    return mysqli_affected_rows($connection);
}
function tasks($user_id)
{
    $connection = connection();
    $res = mysqli_query($connection, "SELECT * FROM `tasks` WHERE `user_id` = $user_id");
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}