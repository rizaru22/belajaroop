<?php

include "class/Buku.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP OOP</title>
</head>

<body>
    <a href="view/tambah.php">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $objek = new Buku();
            if ($objek->tampilSemua() != 0) {
                foreach ($objek->tampilSemua() as $data) {
                    echo "<tr>
                    <td>$no</td>
                    <td>$data[judul]</td>
                    <td>$data[pengarang]</td>
                    <td>$data[penerbit]</td>
                    <td>
                    <a href='view/ubah.php?id=$data[id]'>Ubah</a> 
                    <a href='controllerBuku.php?aksi=hapus&id=$data[id]'>Hapus</a>
                    </td>
                </tr>";
                    $no++;
                }
            }


            ?>
        </tbody>
    </table>
</body>

</html>