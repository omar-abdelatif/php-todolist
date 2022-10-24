<?php
//! Include Header
include "lib/includes/header.php";
//! Include Nav
include "lib/includes/nav.php";
$id = $_GET['task_id'];
?>
<div class="d-flex flex-column justify-content-center align-items-center" style="height: 60vh;">
    <div class="title mb-3">
        <h1 class="text-white text-center">Edit User</h1>
    </div>
    <form action="lib/handlers/tasks/edit.php" class="rounded p-3 bg-light w-50 mx-auto" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="title" class="form-control border border-dark border-2 mb-2 text-center" placeholder="Task Title">
        <input type="date" name="date" class="form-control border border-dark border-2 mb-2 text-center" placeholder="Date">
        <button type="submit" name="submit" class="btn btn-primary text-center w-100">Submit</button>
    </form>
</div>
<?php include "lib/includes/footer.php" ?>