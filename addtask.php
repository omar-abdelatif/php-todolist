<?php
//! Include Header
include "lib/includes/header.php";
//! Include NAV
include "lib/includes/nav.php";
//! Include Functions
include "lib/core/functions.php";
//! Not Auth Redirect
if (!isset($_SESSION['login'])) {
    redirect('signout.php');
}
?>
<div class="task_title border border-white border-2 w-50 mx-auto p-3 rounded mt-5">
    <h1 class="text-center text-white">Add Task Here</h1>
</div>
<?php if (isset($_SESSION['errors'])) : ?>
    <div class="alert alert-danger w-50 mx-auto mt-5 text-center">
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <p class="text-center p-0 m-0">
                <?= $error ?>
            </p>
        <?php endforeach; ?>
        <?php unset($_SESSION['errors']) ?>
    </div>
<?php elseif (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success w-50 mx-auto mt-5 text-center">
        <?= $_SESSION['success'] ?>
        <?php unset($_SESSION['success']) ?>
    </div>
<?php endif; ?>
<form action="lib/handlers/tasks/addtodo.php" method="post" class="w-50 mx-auto mt-5 bg-light rounded p-5">
    <input type="text" name="title" class="form-control border border-dark border-2 mb-2 text-center" placeholder="Task Title">
    <input type="date" name="date" class="form-control border border-dark border-2 mb-2 text-center" placeholder="Date">
    <button type="submit" name="submit" class="btn btn-primary text-center w-100">Submit</button>
</form>