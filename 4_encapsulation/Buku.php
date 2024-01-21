<?php

class Buku{
    private $judul;
    private $pengarang;
    private $penerbit;

    public function setJudul($title){
        $this->judul=$title;
    }

    public function setPengarang($author){
        $this->pengarang=$author;
    }

    public function setPenerbit($publisher){
        $this->pengarang=$publisher;
    }

}

class Buku1 extends Buku{
    public function getJudul(){
        return $this->judul;
    }

}