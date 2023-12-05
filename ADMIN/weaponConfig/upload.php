<?php

include '../../Connection/koneksi.php';
$conn = koneksi();

$id = $_POST['id'];
$name = $_POST['name'];
$path = isset($_FILES['path']) ? $_FILES['path'] : null;
$type = $_POST['type'];

if ($path['error'] == UPLOAD_ERR_OK) {
    $tmpFilePath = $path['tmp_name'];
    $fileName = basename($path['name']);
    $uploadDirectory = '../../images/weapon/';
    $destination = $uploadDirectory.$fileName;
    move_uploaded_file($tmpFilePath, $destination);
    echo "<script>alert('sukses mengupload');window.location.href = 'index.php'</script>";
} else {
    echo 'Error uploading file.';
}
if (isset($_GET['edit'])) {
    $sql = "UPDATE weapon SET name='$name', type = '$type',Path = '$fileName' WHERE id = $id";
} else {
    $sql = "INSERT INTO weapon VALUES(0, '$name', '$type', '$fileName')";
}
$query = mysqli_query($conn, $sql);
