<?php
//! Include Header
include "lib/includes/header.php";
//! Include Navbar
include "lib/includes/nav.php";
//! Include Insert
include "lib/handlers/insert.php";
//! Include Conig
include "lib/database/config.php";
//! Include Functions
include "lib/core/functions.php";
//! Include Validations
include "lib/core/validations.php";
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];
    $type = $_FILES['img']['type'];
    $type = explode('/', $type);
    $path = 'lib/assets/imgs/';
    $location = $path . $avatar;
    $allowedExt = ['jpg', 'png', 'jpeg', 'gif'];
    $imgExt = strtolower(end($type));
    //! Validation
    if (empty($fname)) {
        $errors[] = "First Name Is Required";
    } elseif (strlen($fname) < 3 || strlen($fname) > 10) {
        $errors[] = "First Name Should Be Between 3 and 10";
    }
    if (empty($password)) {
        $errors[] = "Password Is Required";
    } elseif (strlen($password) < 3) {
        $errors[] = "Password Should Be Greater Than 3 Char..";
    }
    if (empty($email)) {
        $errors[] = "Email Is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email Is Not Valid";
    } elseif (emailExistence($email)) {
        $errors[] = "Email Already Exist";
    }
    if (empty($avatar)) {
        $errors[] = "Img Is Required";
    }
    if ($img_size > 5242880) {
        $errors[] = "The Image Exceeds The Limit 5MB";
    }
    if (!in_array($imgExt, $allowedExt)) {
        $errors[] = "File Extention Is Not Supported";
    }
    if (empty($errors)) {
        uploadImage($tmp_name, $location);
        insertUser($fname, $lname, $email, $password, $avatar);
        $_SESSION['success'] = "User Inserted Successfully";
        // redirect('login.php');
    } else {
        $_SESSION['errors'] = $errors;
        redirect('register.php');
        exit;
    }
}
?>
<div class="title border border-3 border-white w-50 mx-auto rounded mt-5">
    <h1 class="p-3 text-center text-white ">Sign Up</h1>
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
<form action="register.php" method="post" enctype="multipart/form-data">
    <div class="inputs w-50 mx-auto bg-light mt-5 p-5 rounded text-center">
        <input type="text" name="fname" class="form-control mb-3 border-dark border border-2" placeholder="First Name">
        <input type="text" name="lname" class="form-control mb-3 border-dark border border-2" placeholder="Last Name">
        <input class="form-control mb-3 border-dark border border-2" type="email" name="email" placeholder="Enter Email">
        <input class="form-control border-dark border border-2 mb-3" type="password" name="password" placeholder="Enter Password">
        <input type="file" name="img" class="form-control border-dark border border-2">
        <button type="submit" class="btn btn-primary mt-4 w-100" name="submit">Submit</button>
    </div>
</form>
<?php include "lib/includes/footer.php" ?>