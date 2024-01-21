<?php

class Koneksi{

    final public function cekKoneksi(){
        echo "Koneksi Berhasil<br>";
    } 
}

class Buku extends Koneksi{

    public function cekKoneksi(){
        echo "Koneksi ke tabel buku berhasil<br>";
    }

    public function tambahBuku(){
        echo "Data buku berhasil ditambahkan<br>";
    }
}