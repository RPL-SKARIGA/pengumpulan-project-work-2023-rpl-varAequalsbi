<?php include '../APP/header_1.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="CSS/styleIndex.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-info">
                    <img src="profile.jpg" alt="Profile Image" class="profile-image">
                    <div class="profile-name">John Doe</div>
                    <div class="profile-bio">Software Developer</div>
                </div>
                <a href="../APP/index.php" class="btn btn-primary">Back</a>
            </div>
            <div class="col-md-9">
                <!-- User's Posts -->
                <div class="post">
                    <a href="post-details.html" class="post">
                        <div class="post-title">Post Title 1</div>
                        <div class="post-subtitle">Subtitle for Post 1</div>
                        <div class="post-images">
                            <div class="post-image-container">
                                <img src="../images/Hydrangeas.jpg" alt="Image 1" class="post-image">
                            </div>
                            <div class="post-image-container">
                                <img src="../images/Hydrangeas.jpg" alt="Image 2" class="post-image">
                            </div>
                            <div class="post-image-container">
                                <img src="../images/Hydrangeas.jpg" alt="Image 3" class="post-image">
                            </div>
                            <div class="post-image-container">
                                <img src="../images/Hydrangeas.jpg" alt="Image 4" class="post-image">
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="post-date">August 19, 2023</div>
                            <div class="post-likes">
                                <span>&#9829;</span> 25 Likes
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Add more user's posts here -->

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
<script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
   
</body>

</html>