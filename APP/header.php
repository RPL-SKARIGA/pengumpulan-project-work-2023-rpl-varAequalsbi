<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AskTEAM!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <?php
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Brand and Navigation Links -->
            <a class="navbar-brand" href="../APP/index.php">AskTEAM!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../APP/index.php">Home</a>
                    </li>
                </ul>
                <!-- dropbox -->
                <?php if (isset($_SESSION['username'])) : ?>

                    <div class="select-menu" style="height: 30px; margin: 0">
                        <div class="select-btn" style="height: 30px; color: black">
                            <span class="sBtn-text">Select your option</span>
                            <i class="bx bx-chevron-down"></i>
                        </div>
                        <ul class="options">
                            <li class="option">
                                <i class="bx bxl-github" style="color: #171515;"></i>
                                <a href="../Upload/upload.php?4" class="option-text">1 TEAM</a>
                            </li>
                            <li class="option">
                                <i class="bx bxl-instagram-alt" style="color: #E1306C;"></i>
                                <a href="../Upload/upload.php?8" class="option-text">2 TEAM</a>

                            </li>
                        </ul>
                    </div>
                <?php endif ?>

                <?php
                if (!isset($_SESSION['username'])) {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../Register/registerpage.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login/loginpage.php">Login</a>
                        </li>
                    </ul>
                <?php } elseif (isset($_SESSION['admin'])) { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../ACCOUNT/profile.php?id=<?php echo $id; ?>">
                                <img src="../images/Hydrangeas.jpg" alt="Profile Picture" class="rounded-circle me-2" width="40" height="40">
                                <?php echo "<b> ADMIN " . $_SESSION['username'] . "</b>"; ?>
                            </a>
                        </li>

                        <li class="nav-item">
                            <div class="nav-link">
                                <a class="nav-link" href="../login/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                <?php } elseif (isset($_SESSION['username'])) { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../ACCOUNT/profile.php?id=<?php echo $id; ?>">
                                <img src="../images/Hydrangeas.jpg" alt="Profile Picture" class="rounded-circle me-2" width="40" height="40">
                                <?php echo "<b>" . $_SESSION['username'] . "</b>"; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login/logout.php">Logout</a>
                        </li>
                    </ul>

                <?php } ?>
            </div>
    </nav>

    <!-- Bootstrap JS (Optional) -->
</body>
<script>
    const optionMenu = document.querySelector(".select-menu"),
        selectBtn = optionMenu.querySelector(".select-btn"),
        options = optionMenu.querySelectorAll(".option"),
        sBtn_text = optionMenu.querySelector(".sBtn-text");

    selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

    options.forEach(option => {
        option.addEventListener("click", () => {
            let selectedOption = option.querySelector(".option-text").innerText;
            sBtn_text.innerText = selectedOption;

            optionMenu.classList.remove("active");
        });
    });
</script>

</html>