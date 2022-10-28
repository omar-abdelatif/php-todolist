<?php
//! Header
include "lib/includes/header.php";
//! Include Nav
include "lib/includes/nav.php";
//! Include Tasks
include "lib/handlers/tasks/tasks.php";
//! Include Connection
include "lib/database/config.php";
//! Include Function
include "lib/core/functions.php";
//! Auth
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
$id = $_GET['user_id'];
$listOfTasks = tasks($id);
?>
<table class="table align-middle text-white text-center mt-5 table-bordered">
    <thead>
        <th>ID</th>
        <th>Task Name</th>
        <th>Date</th>
    </thead>
    <tbody>
        <?php if (count($listOfTasks) > 0) : ?>
            <?php foreach ($listOfTasks as $task) : ?>
                <tr>
                    <td>
                        <?= $task['id'] ?>
                    </td>
                    <td>
                        <?= $task['title'] ?>
                    </td>
                    <td>
                        <?= $task['date'] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <h1 class="text-center text-white mt-5" style="margin-bottom: 0;">User Has No Tasks</h1>
        <?php endif ?>
    </tbody>
</table>

<?php include "lib/includes/footer.php" ?>