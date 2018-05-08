<?php
require 'proses_berita.php';
if (isset($_POST["submit"])) {
// cek data berhasil ditamabahkan atau tidak
if ( tambah($_POST) > 0) {
  echo "
  <script>
    alert('Berita Berhasil Ditambah!!!');
    document.location.href= 'dashboard.php';
  </script>
  ";
}else {
  echo "
  <script>
    alert('Cek Maning jancok!!!');
    document.location.href= 'Tambah_berita.php';
  </script>
  ";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tulis Artikel</title>
  </head>
    <link rel="stylesheet" href="css/styleArtikel.css">

  <body>
    <div class="Loginbox">
      <h3 style="float:left;">Tulis Artikel</h3>
      <h1 style="float:right;"> <a href="dashboard.php" style="font-size:25pt;">X</a></h1>
      <form class="" action="" method="post">
        <input style="height:20px;" type="text" required name="Judul" value="" autocomplete="off" placeholder="Judul Berita"><br><br>
        <input style="height:20px; width:150px;" type="text" required name="Penulis" value="" autocomplete="off" placeholder="Penulis"><br>
        <textarea style="resize:none;" name="Isi" rows="9" cols="82" placeholder="Isi Berita"></textarea><br><br>
        <button type="submit" name="submit">KirimBerita</button><br><br>
      </form>

    </div>
  </body>
</html>
