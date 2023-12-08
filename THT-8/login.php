
<?php
session_start();

$users = array(
    // username => sandi
    // array[0]
    'user' => 'praktikum',
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        // Redirect ke halaman dashboard setelah login
        header('Location: index.php');
        exit(); //terminate script
    } else {
        $error_message = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/style.css"/>
    <script src="https://kit.fontawesome.com/16ffd14b17.js" crossorigin="anonymous"></script>
</head>

<body class="login-page-body">

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <section class="wrapper">
        <form action="" method="post">
            <h1 class="login-title">Login</h1>
            <p>Welcome, please login with this credential <br>
                <span>username: user <br>password: praktikum</span> 
            </p>

            <div class="input-box">
                <input type="text" placeholder="Username" name="username" id="username" required>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="remember-forgot-password">
                <label for=""><input type="checkbox">Remember Me</label>
                <a href="#">Forget password</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
            <div class="register">
                <p>Don't have an accout? <a href="#">Register</a></p>
            </div>
        </form>
    </section>

</body>

</html>

