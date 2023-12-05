<?php

include '../../Connection/koneksi.php';
$id = $_GET['id'];
$conn = koneksi();
$sql = "DELETE FROM weapon WHERE id= $id";
$result = mysqli_query($conn, $sql);
?>
<script>
alert('succeed')
window.location.href = 'index.php' 
</script>

