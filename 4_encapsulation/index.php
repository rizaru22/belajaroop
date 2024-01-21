<?php

include "Buku.php";

$objek = new Buku1();
$objek->setJudul("Pemrograman Web");
$objek->setPengarang("Safrizal");
$objek->setPenerbit("smkngoding");

echo $objek->getJudul();
