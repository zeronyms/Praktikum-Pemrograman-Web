<?php

require_once 'Library.php';
session_start();




$library = new Library();
// echo $library->getARR();
// var_dump( $library->getARR());
// foreach ($library->getARR() as $arr){
//     echo $arr;
// }

// $library->addBook(1, "Metode Numerik", "Dr.Tasmi");
// $library->addBook(2, "Pemrograman Berorientasi Objek", "Intan Oktafiani");
// $library->addBook(3, "Pemrograman Dasar", "M. Koyimatu");

// $error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // foreach($library->getUsers() as user){

        // }

        // echo "DEBUGGGG";
        // $user = $_SESSION['user'];


        // if ($user) {
        //     // Use get_object_vars to get an associative array of the object properties
        //     $userProperties = get_object_vars($user);

        //     echo $userProperties;

            // Iterate through the properties using foreach
        //     foreach ($userProperties as $propertyName => $propertyValue) {
        //         echo "$propertyName: $propertyValue<br>";
        //     }
        // } else {
        //     echo "User session not found.";
        // }


        foreach ($library->getUsers() as $user) {
            echo $user->getUsername();

            if ($user->getUsername() == $username && $user->getPassword() == $password) {
                $_SESSION['user'] = $user;

                header("Location: borrow.php");
                exit();
            } else {
                $error = 'Invalid username or password.';
            }
        }

        var_dump($_SESSION['user']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPER e-Lib - Login</title>
</head>

<body>
    <h1>UPER e-Lib</h1>
    <h2>Login</h2>
    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>

</html>