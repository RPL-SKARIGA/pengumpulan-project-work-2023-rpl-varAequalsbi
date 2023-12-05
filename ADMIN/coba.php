<?php session_start();

if (!isset($_SESSION['super_id'])) {
    echo '<h1>NO ADMIN DETECTED PLEASE LOGIN FIRST</h1>';
    echo "<button><a href='index.php'>LOGIN HERE</a></button>";
    exit;
}
include '../CRUD.php';
$conn = koneksi();
$user = $conn->query('SELECT * FROM user')->fetch_all();
?>
<head>
<link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Master User</b></a>
  </div>
</nav>
<div>
<table class="table table-centered mb-0">
    <thead class="table-dark">
        <tr class="text-center">
        <th>No</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Profile Picture</th>
                    <th colspan="3" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
                $no = 0;
foreach ($user as [$id, $username, $password, $profilePict]) {
    ++$no;
    ?>
        <tr class="text-center">
        <td><?php echo $no; ?></td>
                    <td><?php echo $id; ?></td>
                    <td>
                        <?php if (isItAdmin($username)) { ?>
                            <p style='color: blue'><?php echo $username; ?></p>
                        <?php } elseif (isUserBanned($id)) { ?>
                            <p style='color: red'><?php echo $username; ?></p>
                        <?php } else { ?>
                            <?php echo $username; ?>
                        <?php } ?>
                    </td>
                    <td><?php echo $profilePict; ?></td>
                    <td style="width: 200px">
                        <a href="Action/deleteUser.php?id=<?php echo $id; ?>" class="btn btn-danger">
                            <i class="bi bi-trash"> DELETE</i>
                        </a>
                    </td>
                    <td>
                        <?php if (!isItAdmin($username)) { ?>
                            <a href="Action/makeUserAdmin.php?username=<?php echo $username; ?>" class="btn btn-success">
                                <i class="bi bi-arrow-up"> PROMOTE TO ADMIN</i>
                            </a>
                        <?php } elseif (isItAdmin($username)) { ?>
                            <a href="Action/revokeUserAdmin.php?username=<?php echo $username; ?>" class="btn btn-warning">
                                <i class="bi bi-arrow-down"> REVOKE ADMIN</i>
                            </a>
                        <?php } ?>
                    </td>
                    <td style="width: 200px">
                        <?php if (!isUserBanned($id)) { ?>
                            <a href="Action/banUser.php?id=<?php echo $id; ?>" class="btn btn-danger">
                                <i class="bi bi-x"> BAN USER</i>
                            </a>
                        <?php } elseif (isUserBanned($id)) { ?>
                            <a href="Action/unbanUser.php?id=<?php echo $id; ?>" class="btn btn-success">
                                <i class="bi bi-arrow-up"> UNBAN USER</i>
                            </a>
                        <?php } ?>
                    </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>