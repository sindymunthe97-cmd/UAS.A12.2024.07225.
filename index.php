<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM produk_beauty");
?>

<!DOCTYPE html>
<html>
<head>
<title>GlowSkin Beauty</title>
<link rel="stylesheet" href="style.css">
</head>
<div class="navbar">
    <header>
  <h2>GlowSkin Beauty</h2>
  <nav>
    <a href="index.php">Home</a>
    <a href="#produk">Produk</a>
    <a href="FAQ.php">FAQ</a>
    <a href="#tentang-kami">Tentang Kami</a>
  </nav>
</header>

</div>

<body>

<header class="navbar">
    <h2 class="logo">GlowSkin Beauty</h2>
     <p>Rawat Kulitmu, Tunjukkan Cahayamu </p>

    <nav>
        <a href="index.php">Home</a>
        <a href="#produk">Produk</a>
        <a href="pesan.php">Pesan</a>
        <a href="FAQ.php">FAQ</a>
        <a href="data_produk.php">Admin</a>
    </nav>
</header>

<style>
     .hero {
    background: 
        linear-gradient(rgba(255, 192, 203, 0.67), rgba(255, 192, 203, 0)),
        url('gambar/bacground.png');
    background-size: cover;
    background-position: center;
    padding: 120px 20px;
    text-align: center;
}
</style>

<div class="hero">
    <section id="tentang-kami" class="tentang-box">
  <h2>Tentang GlowSkin Beauty</h2>
  <p>...</p>
  <p>
    GlowSkin Beauty merupakan platform berbasis web yang menyediakan
    informasi dan pengelolaan produk kecantikan seperti skincare dan makeup.
    Website ini dibuat untuk membantu pengguna dalam menemukan produk beauty
    yang sesuai dengan kebutuhan kulit secara mudah dan efisien.
  </p>
</section>
   <h1>Your Daily Beauty Essentials</h1>
<p>
  Koleksi skincare dan makeup berkualitas  
  untuk menemani rutinitas kecantikanmu dengan percaya diri.
</p>
<a href="#produk" class="btn-main">Belanja Sekarang</a>
</div>

<div class="container" id="produk">
<h2>Produk Beauty</h2>

<?php while($p=mysqli_fetch_assoc($data)){ ?>
<div id="produk" class="section">
    <h2>Daftar Produk</h2>

    <?php while($p = mysqli_fetch_assoc($data)) { ?>
        <div style="border:1px solid #000; width:200px; padding:10px; margin:10px; display:inline-block;">
            <img src="gambar/<?php echo $p['gambar']; ?>" width="150"><br>

            <b><?php echo $p['nama_produk']; ?></b><br>
            <?php echo $p['brand']; ?><br>
            Rp.<?php echo number_format($p['harga']); ?><br>

            <p><?php echo $p['deskripsi']; ?></p>

            <a href="pesan.php?id=<?= $p['id']; ?>" class="btn-beli">
      Beli Sekarang
    </a>
        </div>
    <?php } ?>
</div>
<?php } ?>

<footer class="footer">
  <p style="text-align:center; margin-top:10px; font-size:14px; color:#555;">
  Dibuat oleh: <b>Shindy Novryanti Br Munthe</b> NIM(A12.2024.07225)
</p>
  <p>© 2026 GlowSkin Beauty | UAS Pemrograman Web</p>
</footer>

</div>
</body>
</html>
