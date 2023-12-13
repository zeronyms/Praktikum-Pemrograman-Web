<?php

require_once 'Library.php';
session_start();
// session_destroy();

$library = new Library();
$library->addBook(1, "Metode Numerik", "Dr.Tasmi");
$library->addBook(2, "Pemrograman Berorientasi Objek", "Intan Oktafiani");
$library->addBook(3, "Pemrograman Dasar", "M. Koyimatu");

$library->addUser(1, "admin", "123");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['borrow'])) {
        $userId = $_SESSION['user']->getId();
        $bookId = $_POST['bookId'];
        $library->borrow($userId, $bookId);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPER e-Lib - Borrow</title>
</head>
<body>
    <h1>UPER e-Lib</h1>
    <h2>Pinjam Buku</h2>
    <form method="post">
        <label for="bookId">Book ID:</label>
        <input type="text" name="bookId" required>
        <br>
        <input type="submit" name="borrow" value="Borrow Book">
    </form>
    <h3>Daftar Buku</h3>
    <ul>
        <?php foreach ($library->getBooks() as $book): ?>
            <?php if ($book->available): ?>
                <li><?= $book->getId() ?> - <?= $book->getTitle() ?> by <?= $book->getAuthor() ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
