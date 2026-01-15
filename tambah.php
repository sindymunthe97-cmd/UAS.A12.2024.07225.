<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Beauty</title>
</head>
<body>

<h2>Tambah Produk Beauty</h2>

<form action="simpan.php" method="POST" enctype="multipart/form-data">
    Nama Produk <br>
    <input type="text" name="nama_produk" required><br><br>

    Brand <br>
    <input type="text" name="brand" required><br><br>

    Harga <br>
    <input type="number" name="harga" required><br><br>

    Kategori <br>
    <select name="kategori">
        <option value="Skincare">Skincare</option>
        <option value="Makeup">Makeup</option>
    </select><br><br>

    Deskripsi <br>
    <textarea name="deskripsi"></textarea><br><br>

    Gambar <br>
    <input type="file" name="gambar" required><br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>
