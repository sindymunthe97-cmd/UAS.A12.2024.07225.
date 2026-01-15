<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM produk_beauty WHERE id='$id'");

header("location:data_produk.php");
?>
