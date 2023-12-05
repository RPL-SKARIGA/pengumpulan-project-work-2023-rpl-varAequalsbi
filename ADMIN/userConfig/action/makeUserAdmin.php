<?php

include '../../../CRUD.php';
$username = $_GET['username'];

$result = makeUseradmin($username);

echo "<Script>
    alert('BERHASIL MEMBUAT USER MENJADI ADMIN');
    window.location.href = '../'
    </Script>";
