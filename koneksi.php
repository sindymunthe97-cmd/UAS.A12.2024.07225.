<?php
$koneksi = mysqli_connect("localhost","root","","beauty_dbb_fix");
if(!$koneksi){
  die("Koneksi gagal: ".mysqli_connect_error());
}
?>
