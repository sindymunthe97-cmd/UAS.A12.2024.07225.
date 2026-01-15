<?php
include 'koneksi.php';

$nama   = $_POST['nama_produk'];
$brand  = $_POST['brand'];
$harga  = $_POST['harga'];
$kategori = $_POST['kategori'];
$desk   = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$tmp    = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, "gambar/".$gambar);

mysqli_query($koneksi, "INSERT INTO produk_beauty 
(nama_produk, brand, harga, kategori, deskripsi, gambar)
VALUES
('$nama','$brand','$harga','$kategori','$desk','$gambar')");

header("location:data_produk.php");
?>
