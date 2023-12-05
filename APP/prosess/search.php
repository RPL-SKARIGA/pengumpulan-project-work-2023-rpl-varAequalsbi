<?php

include '../../CRUD.php';
// include '../../Connection/koneksi.php';
$keyword = $_POST['keyword'];
// // print_r($_POST);
// $conn = koneksi();

// $sql = "SELECT * FROM ungahan WHERE title LIKE '%$keyword%'";

// $result = mysqli_query($conn, $sql)->fetch_all();
// print_r($result);
// exit;

if (isSearchTrue($keyword)) {
    header("location: ../index.php?search=$keyword");
}
