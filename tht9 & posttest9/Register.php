<?php

require_once 'Library.php';
session_start();

$library = new Library();
// $library->addBook(1, "Metode Numerik", "Dr.Tasmi");
// $library->addBook(2, "Pemrograman Berorientasi Objek", "Intan Oktafiani");
// $library->addBook(3, "Pemrograman Dasar", "M. Koyimatu");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $error = 'Username and password are required.';
        } else {
            $_SESSION['user'] =  $library->addUser(count($library->getUsers()) + 1, $username, $password);

            // $_SESSION['user'] = $user;

            // echo "Berhasil";

            // foreach(($library->getUsers()) as $user){
            //     echo $user->getUsername();
            // }

            // $library->emptyARR["KOSONGGGGGG"];
           

            header("Location: login.php");
            exit();
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPER e-Lib - Register</title>
</head>
<body>
    <h1>UPER e-Lib</h1>
    <h2>Register</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="text" name="password" required>
        <button type="submit" name="register">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
