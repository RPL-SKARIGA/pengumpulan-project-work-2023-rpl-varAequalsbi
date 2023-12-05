<?php

include '../../../CRUD.php';

$username = $_GET['id'];

deleteUser($username);

echo "<script>
    alert('User berhasil di hapus');
    window.location.href = '../'
</script>";
