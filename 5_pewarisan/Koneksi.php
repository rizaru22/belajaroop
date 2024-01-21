<?php

class Koneksi{
    protected $server;
    protected $username;
    protected $password;
    protected $database;

    public function __construct($server,$username,$password,$database)
    {
        $this->server=$server;
        $this->username=$username;
        $this->password=$password;
        $this->database=$database;
    }

    public function cekKoneksi(){
        echo "Koneksi Berhasil";
    }
}

class Buku extends Koneksi{

    public function tambahBuku(){
        echo "Data buku berhasil ditambahkan";
    }
}