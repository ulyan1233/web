<?php
require 'proses_tambah.php';
if (isset($_POST["submit"])) {

// cek data berhasil ditamabahkan atau tidak
if ( tambah($_POST) > 0) {
  echo "
  <script>
    alert('Akun Berhasil Ditambah!!!');
    document.location.href= 'dashboard.php';
  </script>
  ";
}else {
  echo "
  <script>
    alert('Cek Maning dancok!!!');
    document.location.href= 'Login.php';
  </script>
  ";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="css/styletambah.css">

  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Membuat!!!")
      </script>
    <?php endif; ?>

    <div class="Loginbox" style="border-bottom:5px solid red; border-top:2px solid red;">

      <img src="logo.png" alt="" class="avatar">
      <h2>Buat Akun Baru!!!</h2>

      <form class="" action="" method="post">
        <input type="text" name="Nama" value="" required placeholder="Nama">
        <input type="Text" name="Email" value="" required placeholder="Email">
        <input type="Password" name="Password" required value="" placeholder="Password">
        <input type="Password" name="Password2" value="" required placeholder="Confirm Password">
        <button type="submit" name="submit">Tambah Akun</button><br><br>
      </form>

    </div>
  </body>
</html>
