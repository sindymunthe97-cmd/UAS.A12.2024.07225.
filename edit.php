<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan";
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM produk_beauty WHERE id='$id'");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan di database";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

 <form method="post" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Nama Produk:<br>
    <input type="text" name="nama_produk" value="<?= $data['nama_produk']; ?>"><br><br>

    Brand:<br>
    <input type="text" name="brand" value="<?= $data['brand']; ?>"><br><br>

    Harga:<br>
    <input type="number" name="harga" value="<?= $data['harga']; ?>"><br><br>

    Deskripsi:<br>
    <textarea name="deskripsi"><?= $data['deskripsi']; ?></textarea><br><br>
    
    Gambar Lama:<br>
<img src="gambar/<?= $data['gambar']; ?>" width="120"><br><br>

Ganti Gambar (opsional):<br>
<input type="file" name="gambar"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
