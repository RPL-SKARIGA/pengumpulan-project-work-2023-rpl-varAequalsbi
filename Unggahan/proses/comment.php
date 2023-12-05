<?php

include '../../Connection/koneksi.php';
$conn = koneksi();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $idungahan = $_GET['idUngahan'];
    $sql = "DELETE FROM komentar WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo 'gakenek';
    } else {
        echo "<script>window.location.href = '../detailUngahan.php?id=$idungahan'</script>";
    }
} else {
    $username = $_POST['username'];
    $idungahan = $_POST['idungahan'];
    $komentar = $_POST['comment'];

    $sql = "INSERT INTO komentar VALUES(0,'$idungahan', '$username', '$komentar')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'gakenek';
    } else {
        echo "<script>window.location.href = '../detailUngahan.php?id=$idungahan'</script>";
    }
}
