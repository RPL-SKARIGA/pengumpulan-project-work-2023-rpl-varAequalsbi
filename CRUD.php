<?php

include 'Connection/koneksi.php';

function register($username, $password)
{
    $conn = koneksi();

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user VALUES(0, '$username', '$password_hash', 0, 0)";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        autologin($username, $password);
    } else {
        echo 'Error: '.mysqli_error($conn);
        exit;
    }
}

function isThereUser($username)
{
    $conn = koneksi();

    $query = "SELECT * FROM user WHERE username='$username'";

    $result = mysqli_query($conn, $query)->fetch_all();

    if (empty($result)) {
        return false;
    }

    return true;
}

function makeUseradmin($username)
{
    $conn = koneksi();

    $query = "SELECT * FROM user WHERE username='$username'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo 'Error: '.mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    $password = $row['password'];
    $id = $row['id'];
    // return print_r($result);

    $adminQuery = "INSERT INTO admin VALUES ('$id', '$username', '$password')";
    $adminResult = mysqli_query($conn, $adminQuery);

    if (!$adminResult) {
        echo 'Error: '.mysqli_error($conn);
        exit;
    }
}

function revokeAdmin($username)
{
    $conn = koneksi();

    $query = "DELETE FROM admin WHERE username = '$username'";

    mysqli_query($conn, $query);
}

function isItAdmin($username)
{
    $conn = koneksi();

    $query = "SELECT * FROM admin WHERE username='$username'";

    $result = mysqli_query($conn, $query)->fetch_all();

    if (empty($result)) {
        return false;
    }

    return true;
}

function deleteUser($id)
{
    $conn = koneksi();

    $query = "DELETE FROM admin WHERE id = '$id'";

    mysqli_query($conn, $query);

    $query = "DELETE FROM user WHERE id = '$id'";

    mysqli_query($conn, $query);
}

function banUser($id)
{
    $conn = koneksi();

    $query = "UPDATE user SET status='1' WHERE id = '$id'";

    mysqli_query($conn, $query);
}

function isUserBanned($id)
{
    $conn = koneksi();

    $query = "SELECT status FROM user WHERE id='$id'";

    $result = mysqli_query($conn, $query)->fetch_assoc();

    if ($result == 0) {
        return false;
    } elseif ($result['status'] == 1) {
        return true;
    }
}

function unBanUser($id)
{
    $conn = koneksi();

    $query = "UPDATE user SET status = 0 WHERE id = '$id'";

    mysqli_query($conn, $query);
}

function autologin($username, $password)
{
    header("location: ../login/login.php?username=$username&password=$password");
}

function pencetLike($iduser, $idUnggahan)
{
    $conn = koneksi();

    $querySelectUnggahan = "SELECT * FROM ungahan WHERE id = '$idUnggahan'";
    $resultSelectUnggahan = mysqli_query($conn, $querySelectUnggahan);
    $row = mysqli_fetch_assoc($resultSelectUnggahan);
    $like = json_decode($row['suka']);
    array_push($like, $iduser);
    json_encode($like);

    $queryAddlike = "UPDATE ungahan SET suka ='$like' WHERE id = '$idUnggahan'";
    $resultAddlike = mysqli_query($conn, $queryAddlike);
    if (!$resultAddlike) {
        echo 'Error: '.mysqli_error($conn);
        exit;
    }
}
function path($id)
{
    $conn = koneksi();
    $img = $conn->query("SELECT path FROM visionholder WHERE id=$id");

    return mysqli_fetch_assoc($img)['path'];
}

function pathWP($id)
{
    $conn = koneksi();
    $img = $conn->query("SELECT path FROM weapon WHERE id=$id");

    return mysqli_fetch_assoc($img)['path'];
}

function pathARTE($id)
{
    $conn = koneksi();
    $img = $conn->query("SELECT path FROM arte WHERE id=$id");

    return mysqli_fetch_assoc($img)['path'];
}

function hapusPostingan($id)
{
    $conn = koneksi();
    $sql = "DELETE FROM ungahan WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo 'gakenek';
    }
}

function carikomentar($id)
{
    $conn = koneksi();
    $sql = "SELECT * FROM komentar WHERE idungahan=$id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'gakenek';
    } else {
        return mysqli_fetch_all($result);
    }
}

function isSearchTrue($keyword)
{
    $conn = koneksi();
    $sql = "SELECT * FROM ungahan WHERE title LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql)->fetch_all();

    if (empty($result)) {
        echo "<script>alert('Not found!');window.location.href = '../'</script>";
    } else {
        return true;
    }
}
