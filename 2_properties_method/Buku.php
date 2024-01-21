<?php

Class Buku{
    //properties
    var $judul;
    var $pengarang;
    var $penerbit;

    //method
    function cetakInfo(){
        echo "Judul:". $this->judul."<br>";
        echo "Pengarang:". $this->pengarang."<br>";
        echo "Penerbit:". $this->penerbit."<br>";
    }

    function isiData($title,$author,$publisher){
        $this->judul=$title;
        $this->pengarang=$author;
        $this->penerbit=$publisher;
    }

}