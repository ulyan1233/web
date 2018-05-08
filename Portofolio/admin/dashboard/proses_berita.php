<?php
// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "portofolio");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($post){
  global $conn;
  $Judul = htmlspecialchars($post["Judul"]);
  $Penulis = htmlspecialchars($post["Penulis"]);
  $Isi = htmlspecialchars($post["Isi"]);

  // query insert data
  $query = "INSERT INTO artikel
              VALUES
              ('$Judul','$Penulis','$Isi','')
              ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
  }


  // HAPUS  Aartikel
  function hapus($ID){
     global $conn;
     mysqli_query($conn,"DELETE FROM artikel WHERE ID = $ID");
     return mysqli_affected_rows($conn);

  }

  // HAPUS USER
  function Busek($id){
     global $conn;
     mysqli_query($conn,"DELETE FROM pengguna WHERE ID = $id");
     return mysqli_affected_rows($conn);
  }


// Edit Berita
  function ubah($data){
    global $conn;
    $ID       = $data["ID"];
    $Judul    = htmlspecialchars($data["Judul"]);
    $Penulis  = htmlspecialchars($data["Penulis"]);
    $Isi      = htmlspecialchars($data["Isi"]);

    // query UPDATE data
    $query = "UPDATE artikel SET
                Judul     = '$Judul',
                Penulis   = '$Penulis',
                Isi       = '$Isi'
                WHERE ID = $ID
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

  }

  // Edit Berita
    function Edit($data){
      global $conn;
      $ID       = $data["ID"];
      $Judul    = htmlspecialchars($data["Nama"]);
      $Penulis  = htmlspecialchars($data["Email"]);
      $Isi      = htmlspecialchars($data["Password"]);

      // query UPDATE data
      $query = "UPDATE Pengguna SET
                  Nama     = '$Judul',
                  Email   = '$Penulis',
                  Password       = '$Isi'
                  WHERE ID = $ID
                  ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);

    }

 ?>
