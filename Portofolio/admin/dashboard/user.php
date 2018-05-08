<?php
require 'proses_berita.php';
$artikel = query("SELECT * FROM Pengguna");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin </title>
	<link rel="stylesheet" href="css/dashboard.css">
	 <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<style media="screen">
	i:hover{
		color: #35424a;
	}
	li a:hover{
		color: #35424a;
	}
</style>

<body>
	<div class="wrap">
		<div class="header">
		</div>
		<div class="menu">
      <ul>
        <h1> <i class="fa fa-dashboard fa-fw"></i>Admin</h1>
      </ul>
		</div>
		<div class="badan">
			<div class="User">
			</div>

			<div class="sidebar" style="text-align:left;">
				<ul>
					<li>
						<a href="dashboard.php"> <i class="fa fa-tasks fa-fw" ></i> ARTIKEL</a><br>
					</li><br><br>
					<li>
						<a href="Tambah_berita.php">  <i class="fa fa-pencil-square-o fa-fw" ></i>TAMBAH BERITA</a>
					</li><br><br>
					<li>
						<a href="User.php" > <i class="fa fa-users fa-fw" ></i>DAFTAR PENGGUNA</a>
					</li><br><br>
					<li>
						<a href="Tambah_akun.php"> <i class="fa fa-plus-square fa-fw" ></i>TAMBAH PENGGUNA</a>
					</li><br><br>
						<a href="logout.php" onclick="return confirm('Yakin Ingin Keluar ?');"> <i class="fa fa-sign-out fa-fw" ></i>KELUAR</a>
					</li>
				</ul>
			</div>

			<div class="content">
            <!-- <?php echo substr("hello", 0, 4) ?> -->
            <table border="1" cellpadding="10" cellspacing="0">
              <tr>
                <th>No.</th>
								<th>Aksi</th>
                <th>Pengguna</th>
                <th>Email</th>
                <th>Password</th>
              </tr>

              <?php $i= 1; ?>

              <?php foreach ( $artikel as $row ) : ?>
              <tr>
                <td><?= $i;  ?></td>
								<td>
                  <a href="ubah_user.php?ID=<?= $row["ID"];?>"><i class="fa fa-pencil fa-fw">Edit </i></a> |
                  <a href="hapus_berita.php?ID=<?= $row["ID"];?>" onclick="return confirm('Yakin Ingin Dihapus?');">Hapus<i class="fa fa-trash fa-fw"></i></a> |

                </td>
                <td><?= $row["Nama"];?></td>
                <td><?= $row["Email"];  ?></td>
                <td><?= $row["Password"];  ?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
            </table>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<p style="color:red;">Copyight 2018</p>
		</div>
	</div>
</body>
</html>
