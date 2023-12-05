<?php

include '../../Connection/koneksi.php';

$conn = koneksi();

$name = $_POST['name'];
$path = isset($_FILES['path']) ? $_FILES['path'] : null;
$id = $_POST['id'];

if ($path['error'] == UPLOAD_ERR_OK) {
    $tmpFilePath = $path['tmp_name'];
    $fileName = basename($path['name']);
    $uploadDirectory = '../../images/arte/';
    $destination = $uploadDirectory.$fileName;
    move_uploaded_file($tmpFilePath, $destination);
    echo 'File uploaded successfully!';
} else {
    echo 'Error uploading file.';
}
if (isset($_GET['edit'])) {
    $sql = "UPDATE arte SET name='$name', Path = '$fileName' WHERE id = $id";
} else {
    $sql = "INSERT INTO arte VALUES(0, '$name', '$fileName')";
}
$query = mysqli_query($conn, $sql);
?>
<script>
alert('succeed')
window.location.href = 'index.php' 
</script>
