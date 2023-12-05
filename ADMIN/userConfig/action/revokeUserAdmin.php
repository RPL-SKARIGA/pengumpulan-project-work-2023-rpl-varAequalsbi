<?php

include '../../../CRUD.php';

$username = $_GET['username'];

revokeAdmin($username);

echo "<script>
    alert('ADMIN REVOKED!');
    window.location.href = '../'
</script>";
