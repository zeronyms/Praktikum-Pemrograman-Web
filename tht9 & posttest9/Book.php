<?php 

class Book {
    private $judulBuku;
    private $id;
    private $penulis;
    private $isAvail = true;

    public function __construct($id, $judulBuku, $penulis)
    {
        $this->id = $id;
        $this->judulBuku = $judulBuku;
        $this->penulis = $penulis;
    }
    public function getId(){
        return $this->id;
    }
    public function getJudulBuku(){
        return $this->judulBuku;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setAvail($avail){
        $this->isAvail = $avail;
    }
}

?>