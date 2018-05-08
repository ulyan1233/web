<?php
require 'proses_berita.php';
$id = $_GET["id"];
if ( Busek($id) > 0) {
  echo "
  <script>
    alert('Data berhasil dihapus!!');
    document.location.replace('User.php');
  </script>
  ";
}else {
  echo "
  <script>
    alert('Goblog Boss !!!');
  </script>
  ";
}
 ?>
