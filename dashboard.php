<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
if (!isset($_SESSION['login'])) {
    header('location: signout.php');
}
include "lib/handlers/insert.php";
include "lib/database/config.php";
$listOfUsers = users();
?>

<table class="table align-middle text-white text-center mt-5">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listOfUsers as $user) : ?>
            <tr>
                <td>
                    <?= $user['id'] ?>
                </td>
                <td>
                    <?= $user['fname'] ?>
                </td>
                <td>
                    <?= $user['lname'] ?>
                </td>
                <td>
                    <?= $user['email'] ?>
                </td>
                <td>
                    <?= $user['password'] ?>
                </td>
                <td>
                    <img src="lib/assets/imgs/<?php $user['img'] ?>" class="rounded img-fluid" width="50" alt="<?= $user['fname'] ?>">
                </td>
                <td>
                    <?php if ($user['fname'] == 'admin') : ?>
                        <a href="edituser.php?user_id=<?= $user['id'] ?>" class="d-block btn btn-warning mb-2">Edit</a>
                    <?php else : ?>
                        <a href="edituser.php?user_id=<?= $user['id'] ?>" class="d-block btn btn-warning mb-2">Edit</a>
                        <a href="lib/handlers/delete.php?user_id=<?= $user['id'] ?>" class="d-block btn btn-danger">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "lib/includes/footer.php"; ?>