<?php
require 'proses_berita.php';
// ambil dat di url--
$ID = $_GET["ID"];
// query data mahasiswa berdasarka ID
$artikel =query("SELECT *FROM artikel WHERE ID = $ID")[0];
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Dashboard | Lihat / Cek Artikel</title>
 </head>
 <link rel="stylesheet" href="css/styleArtikel.css">

 <body>
   <div class="Loginbox">
     <h3 style="float:left;">Lihat / Cek Artikel</h3>
     <form class="" action="" method="post">
       <input type="hidden" name="ID" value="<?= $artikel["ID"]; ?>">
       <input style="height:20px;" type="text" required name="Judul" value="<?= $artikel["Judul"]; ?>" autocomplete="off" placeholder="Judul Berita"><br><br>
       <input style="height:20px; width:150px;" type="text" required name="Penulis" value="<?= $artikel["Penulis"]; ?>" autocomplete="off" placeholder="Penulis"><br>
       <textarea style="resize:none;" name="Isi" rows="9" cols="82" value="" placeholder="Isi Berita"><?= $artikel["Isi"]; ?></textarea><br><br>
       <a href="dashboard.php"><button type="button" name="button">Kembali</button></a><br><br>
     </form>

   </div>

 </body>
</html>
