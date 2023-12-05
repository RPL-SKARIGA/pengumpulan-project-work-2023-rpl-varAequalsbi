<?php

session_start();
include '../../CRUD.php';
if (isset($_SESSION['admin'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        hapusPostingan($id);
        echo "<script>alert('Delete succeed');window.location.href = '../index.php'</script>";
    } else {
        echo 'id not found';
    }
} else {
    echo 'admin not detected if you belive this is and mistake please contact us';
}
