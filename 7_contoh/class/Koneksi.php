<?php
class Koneksi{
    private $server='localhost';
    private $user='root';
    private $pass='';
    private $database='belajaroop';
    protected $koneksi;
    public function __construct()
    {
        $this->koneksi=mysqli_connect($this->server,$this->user,$this->pass,$this->database);
    }

    public function cekKoneksi(){
        if (mysqli_connect_errno()){
            echo "Koneksi Gagal";
        }else{
            echo "Koneksi Berhasil";
        }
    }
}