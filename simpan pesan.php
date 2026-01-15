<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$produk = $_POST['produk'];
$pesan  = $_POST['pesan'];

mysqli_query($koneksi,
  "INSERT INTO pesan (nama, produk, pesan)
   VALUES ('$nama','$produk','$pesan')"
);

header("location:index.php");
?>
