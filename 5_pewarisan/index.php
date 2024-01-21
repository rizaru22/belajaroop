<?php

include 'Koneksi.php';

$objek=new Koneksi('localhost','root','','buku');
$objek->cekKoneksi();


$objek1=new Buku('localhost','root','','buku');
$objek1->cekKoneksi();
$objek1->tambahBuku();