<?php
session_start();
include "lib/includes/header.php";
include "lib/includes/nav.php";
include "lib/core/functions.php";
if (!isset($_SESSION['login'])) {
    redirect('login.php');
}
$id = $_GET['user_id'];
?>
<form action="lib/handlers/update.php" method="post">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <h1 class="title border border-3 border-dark mb-5 text-dark p-3 text-center rounded">Edit User Page</h1>
        <input type="text" name="fname" class="form-control mb-3 border-dark border border-2" placeholder="First Name">
        <input type="text" name="lname" class="form-control mb-3 border-dark border border-2" placeholder="Last Name">
        <input class="form-control mb-3 border-dark border border-2" type="email" name="email" placeholder="Enter Email">
        <input class="form-control border-dark border border-2 mb-3" type="password" name="password" placeholder="Enter Password">
        <!-- <input type="file" name="img" class="form-control border-dark border border-2"> -->
        <button type="submit" class="btn btn-primary mt-4 w-100" name="submit">Submit</button>
    </div>
</form>
<?php include "lib/includes/footer.php"; ?>