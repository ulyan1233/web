<?php
session_start();
$server		= 'localhost';
$username	= 'root';
$pass     = '';
$db_name	= 'portofolio';
$message  = '';
$pdo		= new PDO("mysql:host=$server;dbname=$db_name", $username, $pass);

try
{


  if (isset($_POST['login'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $exe = $pdo->prepare("SELECT * FROM admin WHERE user_admin = '$user' and pass_admin = '$pass'");
    $exe->execute();
    $num_rows = $exe->rowCount();
    if ($num_rows > 0) {
      $_SESSION['nama_admin'] = $data['nama_admin'];
      $_SESSION['id_admin'] = $data['id_admin'];
      $_SESSION['login']  = true;
      header('location:dashboard/dashboard.php');
    }else {
      $message="* Username atau Password salah";
    }
  }
} catch (PDOException $error)
{

}

?>
<?php echo $message;  ?>
<body>

<link rel="stylesheet" href="dashboard/css/styletambah.css">
<div class="Loginbox" style="border-bottom:5px solid red; border-top:2px solid red;">

  <h2>Login</h2>

  <form class="" action="" method="post">
    <input type="text" placeholder="Nama" name="user" value="">
    <input type="password" placeholder="Password" name="pass" value="">
    <button type="submit" name="login">Submit</button>
    <!-- <a href="login.php">Sudah punya akun?</a><br> -->
  </form>

</div>
</body>
