<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto register-container">
                <h2 class="register-heading">Register</h2>
                <form class="register-form" action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="textInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="textInput" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">konfirm password</label>
                        <input type="password" class="form-control" id="passwordInput" name="confirmPassword" required>
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<script>';
                        echo 'alert("password tidak sama");';
                        echo 'window.location.href= "registerpage.php"';
                        echo '</script>';
                    } elseif (isset($_GET['exist'])) {
                        echo '<script>';
                        echo 'alert("pengguna sudah ada");';
                        echo 'window.location.href= "registerpage.php"';
                        echo '</script>';
                    }
                    ?>
                    <div class="mb-3">
                        <button type="submit">Register</button>
                    </div>
                </form>
                <div class="mb-3">
                    <a href="../login/loginpage.php">Already have an account? click here</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>