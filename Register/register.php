<?php
include '../CRUD.php';
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmPassword'];

if ($password == $confirmpassword) {
    $cek = isThereUser($username);

    if ($cek) {
        header("location:registerpage.php?exist");
    } else {
        register($username, $password);
    }
} else {
    header("location:registerpage.php?error");
}
