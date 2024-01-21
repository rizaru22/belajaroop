<?php

class Buku{
    
    var $judul;
    var $pengarang;
    var $penerbit;

    function __construct($title,$author,$publisher)
    {
        $this->judul=$title;
        $this->pengarang=$author;
        $this->penerbit=$publisher;
    }

    function __destruct()
    {
        echo "Judul :".$this->judul."<br>";
        echo "Pengarang :".$this->pengarang."<br>";
        echo "Penerbit :".$this->penerbit."<br>";

        echo "<br>";
    }
}