<?php
require 'proses_berita.php';
// ambil data di url--
$ID = $_GET["ID"];
// query data mahasiswa berdasarka ID
$artikel =query("SELECT *FROM artikel WHERE ID = $ID")[0];
if (isset($_POST["submit"])) {
// cek data berhasil ubah
if ( ubah($_POST) > 0) {
 echo "
 <script>
   alert('Sukses diubah Boss!!!');
   document.location.href= 'dashboard.php';
 </script>
 ";
}else {
 echo "
 <script>
 alert('Gagal diubah Boss!!!');
 </script>
 ";
 }
}

?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Update Data Berita</title>
 </head>
 <link rel="stylesheet" href="css/styleArtikel.css">

 <body>
   <div class="Loginbox">
     <h3 style="float:left;">Ubah Artikel</h3>
     <h1 style="float:right;"><a href="dashboard.php" style="font-size:25pt;">X</a></h1>
     <form class="" action="" method="post">
       <input type="hidden" name="ID" value="<?= $artikel["ID"]; ?>">
       <input style="height:20px;" type="text" required name="Judul" value="<?= $artikel["Judul"]; ?>" autocomplete="off" placeholder="Judul Berita"><br><br>
       <input style="height:20px; width:150px;" type="text" required name="Penulis" value="<?= $artikel["Penulis"]; ?>" autocomplete="off" placeholder="Penulis"><br>
       <textarea style="resize:none;" name="Isi" rows="9" cols="82" value="" placeholder="Isi Berita"><?= $artikel["Isi"]; ?></textarea><br><br>
       <button type="submit" name="submit">UpdateBerita</button><br><br>
     </form>

   </div>

 </body>
</html>
