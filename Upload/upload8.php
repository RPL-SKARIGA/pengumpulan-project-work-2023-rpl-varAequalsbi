<?php include '../APP/header_1.php';
include 'modal8.php'  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/styles.css">
    <?php
    if (isset($_GET['indexchar'])) {
        if ($_GET['indexchar'] == 41) {
            $mpek = $_GET['id'];
        }
    }
    ?>
</head>

<script>
    var charinchaar = []

    function printChar(event) {
        event.preventDefault();
        console.log(charinchaar)
    }
</script>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Upload Post
                    </div>
                    <!-- <button onclick="printChar">a</button> -->
                    <div class="card-body">
                        <form action="uploadProcess.php?team=4" method="post">
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(81) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(82) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(83) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(84) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(85) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(86) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(87) ?>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="selectedImage" class="form-label col-sm-3">Select CHARACTER</label>
                                <div class="col-sm-3">
                                    <?php modal8(88) ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="postTitle" class="form-label">Post Title</label>
                                <input type="text" class="form-control" id="postTitle" name="Title">
                            </div>
                            <div class="mb-3">
                                <label for="postSubtitle" class="form-label">Post Tags</label>
                                <input type="text" class="form-control" id="postSubtitle" name="Tags">
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="printChar">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/CRUD.js"></script>
</body>



</html>