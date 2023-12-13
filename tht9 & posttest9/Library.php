<?php
// session_start();

include_once 'Book.php';
include_once 'User.php';


class Library
{
    private $books = [];
    private $users = [];
    private $transactions = []; //0
    public $emptyARR = [];

    

    public function addBook($id, $judulBuku, $penulis)
    {
        $book = new Book($id, $judulBuku, $penulis);
        return $this->books[$id] = $book;
    }
    public function addUser($id, $username, $password)
    {
        $user = new User($id, $username, $password);
        return $this->users[$id] = $user;
    }
    public function borrow($userId, $bookId)
    {
        if (isset($this->users[$userId]) && isset($this->books[$bookId])) {

            $idTransaksi = count($this->transactions) + 1; //length array
            $this->transactions[$idTransaksi] = ['userId' => $userId, 'bookId' => $bookId];
            $this->books[$bookId]->setAvail(false);
            echo "Buku berhasil dipinjam";

        } else {
            echo "Buku tidak berhasil dipinjam";
        }
    }
    public function getBooks(){
        return $this->books;
    }
    public function getUsers(){
        return $this->users;
    }
    public function getTransaction(){
        return $this->transactions;
    }
    public function getARR(){
        return $this->emptyARR;
    }
}

// $library = new Library();
// $library->addBook(1, "Metode Numerik", "Dr.Tasmi");
// $library->addBook(2, "Pemrograman Berorientasi Objek", "Intan Oktafiani");
// $library->addBook(3, "Pemrograman Dasar", "M. Koyimatu");

// $library->addUser(1, "admin", "admin123");
// $library->addUser(2, "admin2", "admin123");
// $library->addUser(3, "admin3", "admin123");


// echo "INI USer";
// echo "<br>";
// var_dump($library->getUsers());

// foreach($users as $user) {
//     $user->getUsername();
// }