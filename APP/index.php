<?php include 'header_1.php';
include '../Connection/nonfunctionKoneksi.php';
include '../CRUD.php';
$conn = koneksi();
$data = $conn->query('SELECT * FROM ungahan')->fetch_all();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styleIndex.css">
</head>

<body>
    <?php if (isset($_SESSION['admin'])) {
        $admin = $_SESSION['admin'];
    } ?>
    <div class="container mt-5">
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                    <?php if (isset($_GET['search'])) {
                        echo "<a href='index.php'><button class = 'btn btn-danger'>Cancel search</button></a>";
                        $search = $_GET['search'];
                        $sql = "SELECT * FROM ungahan WHERE title LIKE '%$search%'";
                        $data = mysqli_query($conn, $sql)->fetch_all();
                        foreach ($data as [$id, $title, $owner, $vs, $desc, $tag]) {
                            $tag = json_decode($tag);
                            $vs = json_decode($vs);
                            $vsid1 = $vs[0][0];
                            $vsid2 = $vs[1][0];
                            $vsid3 = $vs[2][0];
                            $vsid4 = $vs[3][0];
                            $img1 = path($vsid1);
                            $img2 = path($vsid2);
                            $img3 = path($vsid3);
                            $img4 = path($vsid4);
                            ?>
        
                            <div class="post">
                            <div class="post" id="pindahHalaman<?php echo $id; ?>" style="cursor: pointer">
                                <div class="post-header">
                                    <img src="../images/Hydrangeas.jpg" alt="Profile Image" class="profile-image">
                                    <div class="profile-name">posted by: '<?php echo $owner; ?>'</div>
                                </div>
                                <div class="post-title"><?php echo $title; ?></div>
                                <div class="post-images">
                                <?php $imagePaths = [$img1, $img2, $img3, $img4]; ?>
                                    <div class="post-images"><?php foreach ($imagePaths as $index => $img) { ?>
                                        <div class="post-image-container">
                                            <img src="../images/visionHolder/<?php echo $img; ?>" alt="Image <?php echo $index + 1; ?>" class="post-image">
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post-footer" >
                                <div class="post-date" style="width: 100%; display: flex; flex-direction: row; justify-content: space-between"><?php foreach ($tag as $value) {
                                    echo "#$value ";
                                }?>
                                    <?php if (isset($_SESSION['admin'])) { ?>
                                        <a href="prosess/delete.php?id=<?php echo $id; ?>"><button class="btn btn-danger" >DELETE POST</button></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById("pindahHalaman<?php echo $id; ?>").addEventListener("click", function(event) {
                                event.stopPropagation()
                                window.location.href = "../Unggahan/detailUngahan.php?id=<?php echo $id; ?>"
                            })
                            document.getElementById("like-button").addEventListener("click", function (event) {
                                event.stopPropagation()
                                
                            })
                        </script>
                        <?php
                        }
                    } else {?>

                        <!-- 4 gambar -->
                        <?php
                        foreach ($data as [$id, $title, $owner, $vs, $desc, $tag]) {
                            $tag = json_decode($tag);
                            $vs = json_decode($vs);
                            $vsid1 = $vs[0][0];
                            $vsid2 = $vs[1][0];
                            $vsid3 = $vs[2][0];
                            $vsid4 = $vs[3][0];
                            $img1 = path($vsid1);
                            $img2 = path($vsid2);
                            $img3 = path($vsid3);
                            $img4 = path($vsid4);

                            ?>

                        <div class="post">
                            <div class="post" id="pindahHalaman<?php echo $id; ?>" style="cursor: pointer">
                                <div class="post-header">
                                    <img src="../images/Hydrangeas.jpg" alt="Profile Image" class="profile-image">
                                    <div class="profile-name">posted by: '<?php echo $owner; ?>'</div>
                                </div>
                                <div class="post-title"><?php echo $title; ?></div>
                                <div class="post-images">
                                <?php $imagePaths = [$img1, $img2, $img3, $img4]; ?>
                                    <div class="post-images"><?php foreach ($imagePaths as $index => $img) { ?>
                                        <div class="post-image-container">
                                            <img src="../images/visionHolder/<?php echo $img; ?>" alt="Image <?php echo $index + 1; ?>" class="post-image">
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="post-footer" >
                                <div class="post-date" style="width: 100%; display: flex; flex-direction: row; justify-content: space-between"><?php foreach ($tag as $value) {
                                    echo "#$value ";
                                }?>
                                    <?php if (isset($_SESSION['admin'])) { ?>
                                        <a href="prosess/delete.php?id=<?php echo $id; ?>"><button class="btn btn-danger" >DELETE POST</button></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>


                        <script>
                            document.getElementById("pindahHalaman<?php echo $id; ?>").addEventListener("click", function(event) {
                                event.stopPropagation()
                                window.location.href = "../Unggahan/detailUngahan.php?id=<?php echo $id; ?>"
                            })
                            document.getElementById("like-button").addEventListener("click", function (event) {
                                event.stopPropagation()
                                
                            })
                        </script>
                    <?php }
                        } ?>



                        <!-- 8 gambar -->
                        <!-- <div class="post">
                            <div id="pindahHalaman2" style="cursor: pointer" class="post">
                                <div class="post-header">
                                    <img src="../images/Hydrangeas.jpg" alt="Profile Image" class="profile-image">
                                    <div class="profile-name">John Doe</div>
                                </div>
                                <div class="post-title">CHILDE ENAK</div>
                                <div class="post-images">
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 1" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 2" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 3" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 4" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 1" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 2" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 3" class="post-image">
                                    </div>
                                    <div class="post-image-container">
                                        <img src="../images/Hydrangeas1.jpg" alt="Image 4" class="post-image">
                                    </div>
                                </div>
                            </div>
                            <div class="post-footer">
                                <div class="post-date">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, voluptas!
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById("pindahHalaman2").addEventListener("click", function(event) {
                                event.stopPropagation()
                                window.location.href = "../Unggahan/detailUngahan.php"
                            })
                            document.getElementById("like-button").addEventListener("click", function (event) {
                                event.stopPropagation()
                                window.location.href = "prosess/like.php"
                            })
                        </script> -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>