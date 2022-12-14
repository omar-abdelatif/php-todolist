<?php
//! Insert Task
function insertTask($title, $date, $user_id)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `tasks` (`title`,`date`, `user_id`) VALUES ('$title','$date', $user_id)");
    return mysqli_affected_rows($connection);
}
//! Delete Task
function deleteTask($id)
{
    $connection = connection();
    mysqli_query($connection, "DELETE FROM `tasks` WHERE `id` = $id");
    return mysqli_affected_rows($connection);
}
//! Update Task
function updateTask($id, $title, $date)
{
    $connection = connection();
    mysqli_query($connection, "UPDATE `tasks` SET `title` = '$title', `date` = '$date' WHERE `id` = $id");
    return mysqli_affected_rows($connection);
}
//! Select Task
function tasks($user_id)
{
    $connection = connection();
    $res = mysqli_query($connection, "SELECT * FROM `tasks` WHERE `user_id` = $user_id");
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

//! Done Task
function done($todo_id)
{
    $connection = connection();
    $res = mysqli_query($connection, "SELECT * FROM `tasks` WHERE `id` = $todo_id");
    $taskRow = mysqli_fetch_assoc($res);
    if ($taskRow['status'] == 1) {
        mysqli_query($connection, "UPDATE `tasks` SET `status` = 0 WHERE `id` = $todo_id");
    } else {
        mysqli_query($connection, "UPDATE `tasks` SET `status` = 1 WHERE `id` = $todo_id");
    }
    return mysqli_affected_rows($connection);
}