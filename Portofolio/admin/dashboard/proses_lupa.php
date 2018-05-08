<?php

$pdo = new PDO('mysql:host=localhost;dbname=webdesa','root','');
$exec = $pdo->prepare('SELECT Nama,Password from pengguna where Email=:Email');
$exec->execute([
  'Email' => $_POST['username']
]);

if ($exec->rowCount() > 0) {
  $exec->setFetchMode(PDO::FETCH_ASSOC);
    $datas = $exec->fetchAll();
    foreach ($datas as $data) {
       $data['Nama'];
       $data['Password'];
    }

}else {
  echo"
  <script>
  alert('Akun Tidak ditemukan .Coba Lagi!!!');
    document.location.href= 'lupa.php';
  </script>
  ";
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
     <link rel="stylesheet" href="css/stylelogin.css">

<style media="screen">
  button a{
    color: white;
    font-size: 20px;
    text-decoration: none;
  }

</style>

   <body>
     <div class="Loginbox">
       <img src="logo.png" alt="" class="avatar">
       <h2>Ketemu Gan</h2>
       <form class="" action="proses_login.php" method="post">
         <p>Username/Nama </p>
          <h3 style="color:red;"><?= $data['Nama'];  ?></h3>
         <p>Password</p>
          <h3 style="color:red;"><?=$data['Password'];  ?></h3>
         <button type="submit" name="button"><a href="login.php">Kembali ke Login</a></button><br><br>
       </form>

     </div>
   </body>
 </html>
