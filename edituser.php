<?php
    include "lib/includes/header.php";
    include "lib/includes/nav.php";
    include "lib/core/functions.php";
    include "lib/handlers/insert.php";
    include "lib/database/config.php";
    if (!isset($_SESSION['login'])) { redirect('login.php'); }
    $id = $_GET['user_id'];
    $user = getUserById($id);
?>
<div class="title border border-3 border-white w-50 mx-auto rounded mt-5">
    <h1 class="text-white p-3 text-center">Edit User Page</h1>
</div>
<form action="lib/handlers/update.php" method="post" enctype="multipart/form-data">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="fname" class="form-control mb-3 border-dark border border-2" placeholder="First Name" value="<?= $user['fname'] ?>">
        <input type=" text" name="lname" class="form-control mb-3 border-dark border border-2" placeholder="Last Name" value="<?= $user['lname'] ?>">
        <input class=" form-control mb-3 border-dark border border-2" type="email" name="email" placeholder="Enter Email" value="<?= $user['email'] ?>">
        <input class=" form-control border-dark border border-2 mb-3" type="password" name="password" placeholder="Enter Password" value="<?= $user['password'] ?>">
        <img src="lib/assets/imgs/<?= $user['img'] ?>" alt="<?= $user['fname'] ?> <?= $user['lname'] ?>" width="100" class="mt-2 mb-2 rounded">
        <input type="file" name="img" class="form-control border-dark border border-2" value="<?= $user['img'] ?>">
        <button type="submit" class="btn btn-primary mt-4 w-100" name="submit">Submit</button>
    </div>
</form>
<?php include "lib/includes/footer.php"; ?>