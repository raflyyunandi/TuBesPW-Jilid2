<?php 
session_start();

 ?>

<?php 
	require '../php/functions.php';
	$penemu = query("SELECT nomor, penemu, temuan, nama_negara, tahun_ditemukan, gambar_penemu FROM penemu_terkenal NATURAL JOIN negara");

	if(isset($_POST["cari"])) {
		$penemu = cari($_POST["keyword"]);
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#">Rafly Yunandi Aliansyah</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	     
	      <li class="nav-item">
	        	<a class="nav-link" href="#" target="_blank">Tentang Saya</a>
	      </li>
	      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Cetak Kartu
	        	</a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="cetak.php">Cetak Sekarang</a>
	    </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">173040028</a>
	      </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="" method="POST">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search"  name="keyword" id="keyword">
	      <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
	     </form>
    		  <div class="ml-2">
    	  <a class="btn btn-outline-primary" a href="tambah.php">Tambah Data Baru</a>
    	  <a class="btn btn-outline-danger" a href="../php/logout.php">Logout</a>
    	  </div>
  	</div>
</nav>

	
	 <h1></h1>
	 
	 <div class="container">
	 <table class="table">
	 	 <thead class="thead-light">
		<tr>
			<th>No</th>
			<th>Nama Penemu</th>
			<th>Temuan</th>
			<th>Asal Negara</th>
			<th>Tahun Ditemukan</th>
			<th>Foto Penemu</th>
			<th>Opsi</th>
		</tr>
		<?php if(empty($penemu)) :?>
			<tr>
				<td colspan="7">
					<h1 align="center" style="color: black;">Data tidak ditemukan!</h1>
				</td>
			</tr>
		</thead>
		<?php else : ?>
		<?php foreach ($penemu as $pen) : ?>

	 	<tr><td><?= $pen['nomor'] ?></td>
	 	<td><?= $pen['penemu'] ?></td>
	 	<td><?= $pen['temuan'] ?></td>
	 	<td><?= $pen['nama_negara'] ?></td>
	 	<td><?= $pen['tahun_ditemukan'] ?></td>
	 	<td><img src="../assets/image/<?= $pen['gambar_penemu'] ?>" width="150px" height="200px"></td>
	 	<td>
	 		<a class="btn btn-primary" href="ubah.php?nomor=<?= $pen['nomor'];?>">Ubah</a>
	 		<a class="btn btn-danger" href="hapus.php?nomor=<?= $pen['nomor'] ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')">Hapus</a>
	 		<a class="btn btn-info"href="../php/profil_admin.php?nomor=<?php echo $pen['nomor'] ?>">Detail</a>
	 	</td></tr>
	 <?php endforeach ?>
	<?php endif ?>
	 </table>
	 </div>
<script src="../assets/js/scriptAdmin.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>