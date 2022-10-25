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
$listOfTasks = tasks($_SESSION['login']['id']);
?>
<h1 class="text-center text-white mt-5 mb-5">Task Page For The User</h1>
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
        <?php if (count($listOfTasks) > 0) : ?>
            <?php foreach ($listOfTasks as $task) : ?>
                <?php if ($task['status'] == 1) : ?>
                    <tr class="bg-primary">
                <?php else : ?>
                    <tr>
                <?php endif ?>
                    <td>
                        <?= $task['id'] ?>
                    </td>
                    <td>
                        <?= $task['title'] ?>
                    </td>
                    <td>
                        <?= $task['date'] ?>
                    </td>
                    <td>
                        not yet
                    </td>
                    <td>
                        <a href="edittask.php?task_id=<?= $task['id'] ?>" class="btn btn-warning d-block mb-2">Edit</a>
                        <a href="lib/handlers/tasks/done.php?task_id=<?= $task['id'] ?>" class="btn btn-success d-block mb-2">Check</a>
                        <a href="lib/handlers/tasks/deletetask.php?task_id=<?= $task['id'] ?>" class="btn btn-danger d-block">Delete</a>
                    </td>
                    </tr>
            <?php endforeach ?>
        <?php else : ?>
            <h1 class="text-center text-white mb-2">No Tasks To Show</h1>
        <?php endif ?>
    </tbody>
</table>
<?php include "lib/includes/footer.php" ?>