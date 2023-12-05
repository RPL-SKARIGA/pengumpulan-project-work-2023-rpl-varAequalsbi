<?php

include '../../Connection/koneksi.php';

function imgPath()
{
    $conn = koneksi();
    $query = 'SELECT path from visionholder';

    return mysqli_query($conn, $query)->fetch_all();
}

function getImgById($id)
{
    $conn = koneksi();
    $query = "SELECT path from visionholder where id = $id";

    return mysqli_fetch_assoc(mysqli_query($conn, $query))['path'];
}

function getImgArteById($id)
{
    $conn = koneksi();
    $query = "SELECT path FROM arte WHERE id = $id";

    return mysqli_fetch_assoc(mysqli_query($conn, $query))['path'];
}

function getWeaponImgById($id)
{
    $Result = mysqli_query(koneksi(), "SELECT path FROM weapon WHERE id = $id");

    if (!$Result) {
        echo "<script>console.log('sql error')</script>".mysqli_error(koneksi());
        exit;
    }

    return mysqli_fetch_assoc($Result)['path'];
}

function getArteNameById($id)
{
    return mysqli_fetch_assoc(mysqli_query(koneksi(), "SELECT name FROM arte WHERE id = $id"))['path'];
}
