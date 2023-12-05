<?php session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../APP/index.php">ASKteam!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../APP/index.php">Home</a>
                </li>
                <!-- upload -->
                <?php if (isset($_SESSION['id'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Upload
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Upload_1/upload.php?team=4">1Team</a></li>
                            <li><a class="dropdown-item" href="onwork.php">2Team</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <!-- upload end -->
                <li class="nav-item">
                  
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <!-- search -->
            <form class="d-flex mx-auto" role="search" action="http://localhost/tugasAkhir/APP/prosess/search.php" method="POST">
                <input class="form-control me-auto" type="text" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <!-- search end here -->
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
                            <img src="http://localhost/tugasAkhir/images/hydrangeas.jpg" alt="Profile Picture" class="rounded-circle me-2" width="40" height="40">
                            <?php echo '<b> ADMIN '.$_SESSION['username'].'</b>'; ?>
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
                            <img src="http://localhost/tugasAkhir/images/hydrangeas.jpg" alt="Profile Picture" class="rounded-circle me-2" width="40" height="40">
                            <?php echo '<b>'.$_SESSION['username'].'</b>'; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/logout.php">Logout</a>
                    </li>
                </ul>

            <?php } ?>
        </div>
    </div>
    </div>
</nav>