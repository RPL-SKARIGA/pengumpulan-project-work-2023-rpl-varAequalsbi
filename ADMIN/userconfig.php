<?php
session_start();

if (!isset($_SESSION['super_id'])) {
    echo '<h1>NO ADMIN DETECTED, PLEASE LOGIN FIRST</h1>';
    echo "<button><a href='index.php'>LOGIN HERE</a></button>";
    exit;
}
include '../CRUD.php';
$conn = koneksi();
$user = $conn->query('SELECT * FROM user')->fetch_all();
?>

<?php include 'sidebar/sidebar.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        /* Your custom styles here */
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 2px;
        }
    </style>

</head>
<body>

    <div class="container" >
        <div class="row">
        <div class="col-2">
</div>
<div class="col-10">
        <h2 class="mb-4"><b>Master User</b></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Profile Picture</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
foreach ($user as [$id, $username, $password, $profilePict]) {
    ++$no;
    ?>
                <tr>
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
                            <i class="bi bi-trash"></i> DELETE
                        </a>
                    </td>
                    <td>
                        <?php if (!isItAdmin($username)) { ?>
                            <a href="Action/makeUserAdmin.php?username=<?php echo $username; ?>" class="btn btn-success">
                                <i class="bi bi-arrow-up"></i> PROMOTE TO ADMIN
                            </a>
                        <?php } elseif (isItAdmin($username)) { ?>
                            <a href="Action/revokeUserAdmin.php?username=<?php echo $username; ?>" class="btn btn-warning">
                                <i class="bi bi-arrow-down"></i> REVOKE ADMIN
                            </a>
                        <?php } ?>
                    </td>
                    <td style="width: 200px">
                        <?php if (!isUserBanned($id)) { ?>
                            <a href="Action/banUser.php?id=<?php echo $id; ?>" class="btn btn-danger">
                                <i class="bi bi-x"></i> BAN USER
                            </a>
                        <?php } elseif (isUserBanned($id)) { ?>
                            <a href="Action/unbanUser.php?id=<?php echo $id; ?>" class="btn btn-success">
                                <i class="bi bi-arrow-up"></i> UNBAN USER
                            </a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>
