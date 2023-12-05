<?php

include '../../Connection/koneksi.php';
$id = $_GET['id'];
mysqli_query(koneksi(), "DELETE FROM visionholder WHERE id= $id");

?>
<script>
alert('succeed')
window.location.href = 'index.php' 
</script>

