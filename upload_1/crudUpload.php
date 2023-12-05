<?php
include '../Connection/koneksi.php';

function imgPath() {
    $conn = koneksi();
    $query = "SELECT path from visionholder";
    return mysqli_query($conn, $query)->fetch_all();
    
}

function getImgById($id){
    $conn = koneksi();
    $query = "SELECT path from visionholder where id = $id";
    return mysqli_fetch_assoc(mysqli_query($conn, $query))['path'];
}

function getImgArteById($id){
    $conn = koneksi();
    $query = "SELECT path FROM arte WHERE id = $id";
    return mysqli_fetch_assoc(mysqli_query($conn, $query))['path'];
}
function getArteNameById($id){
    return mysqli_fetch_assoc(mysqli_query(koneksi(), "SELECT name FROM arte WHERE id = $id"))['path'];
}
?>