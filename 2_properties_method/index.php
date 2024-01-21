<?php

include "Buku.php";

$objek=new Buku();
$objek->isiData("Pemrograman Web","Safrizal","smkngoding");
$objek->cetakInfo();


$objek1=new Buku();
$objek1->isiData("Pemrograman Berorientasi Objek","Ahmadi Muslim","smkngoding");
$objek1->cetakInfo();