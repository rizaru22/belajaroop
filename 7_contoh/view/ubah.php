<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <?php
    include "../class/Buku.php";
    $objek=new Buku();
    $data=$objek->cariDataById($_GET['id'])
    ?>
    <form action="../controllerBuku.php?aksi=ubah" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= $data['judul'] ?>">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" value="<?= $data['pengarang'] ?>">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?= $data['penerbit'] ?>">
        <input type="submit" value="Simpan">
    </form>
</body>
</html>