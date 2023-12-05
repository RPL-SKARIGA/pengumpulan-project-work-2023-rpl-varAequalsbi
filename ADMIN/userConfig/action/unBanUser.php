<?php

include '../../../CRUD.php';

$id = $_GET['id'];
unBanUser($id);

echo "<script>
    alert('User berhasil terUnBanned');
    window.location.href = '../'
</script>";
