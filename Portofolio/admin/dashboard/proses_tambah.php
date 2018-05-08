<?php
// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "webdesa");

function tambah($post){
  global $conn;
  $Nama = htmlspecialchars($post["Nama"]);
  $Password = htmlspecialchars($post["Password"]);
  $Email = htmlspecialchars($post["Email"]);

  // query insert data
  $query = "INSERT INTO pengguna
              VALUES

              ('$Nama', '$Password','$Email','')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }
 ?>
