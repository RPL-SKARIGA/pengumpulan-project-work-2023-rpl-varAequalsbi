<?php

include '../../../CRUD.php';

$id = $_GET['id'];

banUser($id);

echo "<script>
    alert('User berhasil terBanned');
    window.location.href = '../'
</script>";
