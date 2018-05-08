<?php
require 'proses_berita.php';

// ambil dat di url--
$ID = $_GET["ID"];
// query data mahasiswa berdasarka ID
$artikel =query("SELECT *FROM Pengguna WHERE ID = $ID")[0];
if (isset($_POST["submit"])) {
// cek data berhasil ubah
if ( Edit($_POST) > 0) {

 echo "
 <script>
   alert('Sukses diubah Boss!!!');
   document.location.href= 'User.php';
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
   <title>Dashboard | Edit User</title>
 </head>
 <link rel="stylesheet" href="css/styleArtikel.css">

 <body>
   <div class="Loginbox">
     <h3 style="float:left;">Edit pengguna</h3>
     <h1 style="float:right;"><a href="User.php" style="font-size:25pt;">X</a></h1>
     <form class="" action="" method="post">
       <input type="hidden" name="ID" value="<?= $artikel["ID"]; ?>">
       <input style="height:20px;" type="text" required name="Nama" value="<?= $artikel["Nama"]; ?>" autocomplete="off" placeholder="Nama Berita"><br><br>
       <input style="height:20px; width:150px;" type="text" required name="Email" value="<?= $artikel["Email"]; ?>" autocomplete="off" placeholder="Email"><br>
       <textarea style="resize:none;" name="Password" rows="9" cols="82" value="" placeholder="Password "><?= $artikel["Password"]; ?></textarea><br><br>
       <button type="submit" name="submit">Konfirmasi</button><br><br>
     </form>

   </div>

 </body>
</html>
