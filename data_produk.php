<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM produk_beauty");
?>

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM produk_beauty");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Beauty</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Data Produk Beauty (ADMIN)</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Produk</a>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr style="background:#ff5c8a;color:white;text-align:center;">
        <th>No</th>
        <th>Nama Produk</th>
        <th>Brand</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; while($p = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $p['nama_produk']; ?></td>
        <td><?= $p['brand']; ?></td>
        <td>Rp <?= number_format($p['harga']); ?></td>
        <td><?= $p['deskripsi']; ?></td>
        <td>
            <img src="gambar/<?= $p['gambar']; ?>" width="80">
        </td>
    <td>
        <a href="logout.php" class="btn" style="background:red;color:white;">
  Logout
</a>
  <a href="edit.php?id=<?= $p['id']; ?>" class="btn">Edit</a>
<a href="hapus.php?id=<?= $p['id']; ?>" 
   class="btn" 
   onclick="return confirm('Yakin hapus data?')">
   Hapus
</a>
</td>

    </tr>
    <?php } ?>
</table>

</body>
</html>
