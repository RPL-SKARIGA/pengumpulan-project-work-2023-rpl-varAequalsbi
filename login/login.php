<?php
session_start();
include '../CRUD.php';
$conn = koneksi();

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$query = "SELECT status FROM user where username = '$username'";
$result = mysqli_query($conn, $query)->fetch_assoc();

if ($result['status'] == 1) {
    header("location:loginpage.php?ban=1");
    die();
}


if (isset($username)) {

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    //admin cek

    $query = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_hash = $row['password'];

        if (password_verify($password, $stored_hash)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['admin'] = "true";
            header("Location:../APP/index.php");
        } else {

            $error = true;
        }
    } else {

        $error = true;
    }
    //admin cekzzzz
    if ($error) {
        # code...
        $query2 = "SELECT * FROM user WHERE username='$username'";
        $result2 = mysqli_query($conn, $query2);

        if (!$result2) {
            echo "Error: " . mysqli_error($conn);
            exit();
        }


        if (mysqli_num_rows($result2) > 0) {
            $row = mysqli_fetch_assoc($result2);
            $stored_hash = $row['password'];

            if (password_verify($password, $stored_hash)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location:../APP/index.php");
            } else {
                header("location:loginpage.php?error=1");
            }
        } else {
            header("location:loginpage.php?error=1");
        }
    }
} else {
    echo "gakenek";
}
