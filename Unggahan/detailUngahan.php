<?php
include '../Connection/nonfunctionKoneksi.php';
include '../CRUD.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM ungahan WHERE id=$id")->fetch_all();
$judul = $data[0][1];
$deskripsi = $data[0][4];
$character = json_decode($data[0][3]);
$gambar1 = path($character[0][0]);
$gambar2 = path($character[1][0]);
$gambar3 = path($character[2][0]);
$gambar4 = path($character[3][0]);

// print_r($character);
// exit;
$weapon1 = pathWP($character[0][1]);
$weapon2 = pathWP($character[1][1]);
$weapon3 = pathWP($character[2][1]);
$weapon4 = pathWP($character[3][1]);

$arte1 = pathARTE($character[0][2]);
$arte2 = pathARTE($character[1][2]);
$arte3 = pathARTE($character[2][2]);
$arte4 = pathARTE($character[3][2]);

$role1 = $character[0][3];
$role2 = $character[2][3];
$role3 = $character[2][3];
$role4 = $character[3][3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Showcase</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <?php include '../APP/header_1.php'; ?>
</head>
<body>
  <div class="container mt-5" style="background-color: #34404e;">
  <br>
  <a href="../APP/index.php"><button class="btn btn-info">BACK</button></a>
  <h1 class="text-center mb-4"><?php echo $judul; ?></h1>
    <div class="row">
        <?php
        $gambarArray = [$gambar1, $gambar2, $gambar3, $gambar4];
foreach ($gambarArray as $gambar) {
    ?>
            <div class="col-md-3 mb-4">
                <img src="../images/visionHolder/<?php echo $gambar; ?>" class="img-fluid" alt="Image" style="max-width: 200px; max-height: 200px;">
                <!-- <img src="../images/Hydrangeas.jpg" alt="" style="max-width: 100px; max-height: 100px;"> -->
            </div>
            <?php
}
?>
<div class="row">
    <div class="col-md-3 mb-4">
        <img src="../images/weapon/<?php echo $weapon1; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-right: 10px;">
        <img src="../images/arte/<?php echo $arte1; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-left: 5px;">
        <p class=""><b>ROLE: <?php echo $role1; ?></b></p>
      </div>
    <div class="col-md-3 mb-4">
        <img src="../images/weapon/<?php echo $weapon2; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-right: 10px;">
        <img src="../images/arte/<?php echo $arte2; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-left: 5px;">
        <p class=""><b>ROLE: <?php echo $role2; ?></b></p>
      </div>
    <div class="col-md-3 mb-4">
        <img src="../images/weapon/<?php echo $weapon3; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-right: 10px;">
        <img src="../images/arte/<?php echo $arte3; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-left: 5px;">
        <p class=""><b>ROLE: <?php echo $role3; ?></b></p>
      </div>
    <div class="col-md-3 mb-4">
        <img src="../images/weapon/<?php echo $weapon4; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-right: 10px;">
        <img src="../images/arte/<?php echo $arte4; ?>" alt="Hydrangeas" style="max-width: 100px; max-height: 100px; margin-left: 5px;">
        <p class=""><b>ROLE: <?php echo $role4; ?></b></p>
      </div>
      
</div>

<div class="row">
      <div class="col-12">
        <p class="image-description text-center"><?php echo $deskripsi; ?></p>
      </div>
    </div>
  </div>

  <h2>Comments</h2>
    <?php if (isset($_SESSION['username'])) { ?>
    <form action="proses/comment.php" method="POST">
        <div class="mb-3">
            <label for="comment" class="form-label">Your Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
            <input type="hidden" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
            <input type="hidden" name="idungahan" value="<?php echo $_GET['id']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php } else { ?>
      <h4>please login first to submit a comment</h4>
    <?php } ?>
  
    <!-- Display comments -->
    <div class="mt-4">
        <?php
            // print_r(carikomentar(4));
$id = $_GET['id'];
$dataKomentar = carikomentar($id);
foreach ($dataKomentar as [$id, $idUngahan, $idUser, $komentar]) {
    ?>

<div class="comment">
    <div class="comment-header">
      <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%">
        <img src="../images/hydrangeas.jpg" alt="Profile Picture" class="avatar" style="width: 50px; height: 50px; border-radius: 50%;">
        <?php if (isset($_SESSION['username'])) {
            if ($_SESSION['username'] == $idUser) {
                ?>
              <a href="proses/comment.php?delete=<?php echo $id; ?>&idUngahan=<?php echo $idUngahan; ?>"><button class="btn btn-danger" style="width: 30px; height: 30px; text-align: center;"><b>X</b></button></a>
              <?php
            }
        } ?>
      </div>
      <div class="comment-details">
          <h5 class="comment-author">BY: <?php echo $idUser; ?></h5>
          <div class="comment-content">
              <p><?php echo $komentar; ?></p>
          </div>
      </div>
    </div>
</div>

<?php }?>

    </div>
    </div>
  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
