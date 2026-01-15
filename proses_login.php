<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "shindy" && $password == "d31") {
    $_SESSION['login'] = true;
    header("Location: data_produk.php");
} else {
    echo "<script>
            alert('Username atau Password salah!');
            window.location='login.php';
          </script>";
}
?>
