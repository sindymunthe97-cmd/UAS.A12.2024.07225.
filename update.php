<?php
include 'koneksi.php';

$id        = $_POST['id'];
$nama      = $_POST['nama_produk'];
$brand     = $_POST['brand'];
$harga     = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$tmp    = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {
    move_uploaded_file($tmp, "gambar/".$gambar);
    $query = "UPDATE produk_beauty SET
                nama_produk='$nama',
                brand='$brand',
                harga='$harga',
                deskripsi='$deskripsi',
                gambar='$gambar'
              WHERE id='$id'";
} else {
    $query = "UPDATE produk_beauty SET
                nama_produk='$nama',
                brand='$brand',
                harga='$harga',
                deskripsi='$deskripsi'
              WHERE id='$id'";
}

mysqli_query($koneksi, $query);

header("location:data_produk.php");
?>
