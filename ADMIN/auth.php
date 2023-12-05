<?php

session_start();
include '../Connection/koneksi.php';
$super_username = $_POST['username'];
$super_password = $_POST['password'];

if (isset($super_username)) {
    $conn = koneksi();
    $super_username = mysqli_real_escape_string($conn, $super_username);
    $super_password = mysqli_real_escape_string($conn, $super_password);

    // code...
    $query2 = "SELECT * FROM super_admin WHERE username='$super_username'";
    $result2 = mysqli_query($conn, $query2);

    if (!$result2) {
        echo 'Error: '.mysqli_error($conn);
        exit;
    }
    // print_r(mysqli_fetch_assoc($result2));
    // echo "<br>";
    // print_r($super_password);
    // die();

    if (mysqli_num_rows($result2) > 0) {
        $row = mysqli_fetch_assoc($result2);
        $stored_hash = $row['password'];

        if (password_verify($super_password, $stored_hash)) {
            $_SESSION['super_username'] = $row['username'];
            $_SESSION['super_id'] = $row['id'];
            header('Location: dashboard');
        } else {
            header('location:index.php?error=1#');
        }
    } else {
        header('location:index.php?error=1');
    }
} else {
    echo 'gakenek';
}
