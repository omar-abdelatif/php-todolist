<?php
//! Header
include "lib/includes/header.php";
//! Include Nav
include "lib/includes/nav.php";
//! Include Functions
include "lib/core/functions.php";
//! Include Tasks Functions
include "lib/handlers/tasks/tasks.php";
//! Include Connection
include "lib/database/config.php";
//! Auth
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
$listOfTasks = tasks();
// echo "<pre>";
// print_r($listOfTasks);
// die;
?>

<h1 class="text-center text-white mt-5 mb-5">Tasks Page For The User</h1>
<div class="addtask">
    <a href="addtask.php" class="btn btn-primary mb-3">Add Task</a>
</div>
<table class="table table-bordered align-middle text-center text-white">
    <thead>
        <th>#</th>
        <th>Title</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach ($listOfTasks as $task) : ?>
            <tr><?= $task['id'] ?></tr>
            <tr><?= $task['title'] ?></tr>
            <tr><?= $task['date'] ?></tr>
            <tr><?= $task['status'] ?></tr>
            <tr>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "lib/includes/footer.php" ?>