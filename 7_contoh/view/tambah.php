<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <form action="../controllerBuku.php?aksi=tambah" method="post">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit">
        <input type="submit" value="Simpan">
    </form>
</body>
</html>