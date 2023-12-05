<?php

session_start();
include '../../../Connection/koneksi.php';
$c1 = $_POST['charid1'];
$c2 = $_POST['charid2'];
$c3 = $_POST['charid3'];
$c4 = $_POST['charid4'];

$w1 = $_POST['weapon4001'];
$w2 = $_POST['weapon4002'];
$w3 = $_POST['weapon4003'];
$w4 = $_POST['weapon4004'];

$a1 = $_POST['arte4001'];
$a2 = $_POST['arte4002'];
$a3 = $_POST['arte4003'];
$a4 = $_POST['arte4004'];

$r1 = $_POST['role4001'];
$r2 = $_POST['role4002'];
$r3 = $_POST['role4003'];
$r4 = $_POST['role4004'];

$judul = $_POST['judul'];
$desc = $_POST['desc'];

$tag = [];

for ($i = 0; $i < $_POST['tag_count']; ++$i) {
    $angka = $i == 0 ? '' : $i;
    array_push($tag, $_POST["Tags$angka"]);
}

// if (isset($_POST['tags1'])) {
//     array_push($tag, $_POST['tags1']);
//     if (isset($_POST['tags2'])) {
//         array_push($tag, $_POST['tags2']);
//     }
// }

$cA1 = [$c1, $w1, $a1, $r1];

$cA2 = [$c2, $w2, $a2, $r2];

$cA3 = [$c3, $w3, $a3, $r3];

$cA4 = [$c4, $w4, $a4, $r4];

$visionHolder = [$cA1, $cA2, $cA3, $cA4];

// upload goes here

$owner = $_SESSION['username'];
$visionHolder = json_encode($visionHolder);

$tag = json_encode($tag);

$conn = koneksi();

$query = "INSERT INTO ungahan VALUES(0, '$judul', '$owner', '$visionHolder', '$desc', '$tag')";
// print_r($query);
// exit;

$result = mysqli_query($conn, $query);
if (!$result) {
    echo 'Error: '.mysqli_error($conn);
} else {
    echo "<script>alert('UPLOAD SUCSEED'); window.location.href = '../../../APP/index.php'</script>";
}
