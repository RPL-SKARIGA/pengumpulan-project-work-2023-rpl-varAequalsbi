<?php
function koneksi()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tugasakhir";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        return die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
