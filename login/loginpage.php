<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto login-container">
                <h2 class="login-heading">Login</h2>
                <form class="login-form" action="login.php" method="POST">

                    <div class="mb-3">
                        <label for="textInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="textInput" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                    <a href="../Register/registerpage.php">Dosent have account? regis here</a>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['error'])) {
        echo '<script>';
        echo 'alert("password salah atau username salah");';
        echo 'window.location.href= "loginpage.php"';
        echo '</script>';
    }
    if (isset($_GET['ban'])) {
        echo '<script>';
        echo 'alert("anda terditeksi banned oleh admin, jika anda merasa ini sebuah kesalahan mohon kontak administrasi kami");';
        echo 'window.location.href= "loginpage.php"';
        echo '</script>';
    }
    ?>
</body>

</html>