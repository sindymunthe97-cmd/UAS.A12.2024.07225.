<div class="pesan-wrapper">
  <div class="form-pesan">
    <h2>Order Beauty Product</h2>

    <form action="simpan_pesan.php" method="POST">
      <div class="form-group">
        <input type="text" name="nama" required placeholder=" ">
        <label>Nama Lengkap</label>
      </div>

      <div class="form-group">
        <input type="text" name="produk" required placeholder=" ">
        <label>Nama Produk</label>
      </div>

      <div class="form-group">
        <textarea name="pesan" placeholder=" "></textarea>
        <label>Catatan Pesanan</label>
      </div>

      <button type="submit">Kirim Pesanan</button>
    </form>
  </div>
</div>
