<?php 
	require 'php/functions.php';
	$penemu = query("SELECT nomor, penemu, temuan, nama_negara, tahun_ditemukan, gambar_penemu FROM penemu_terkenal NATURAL JOIN negara");

	if(isset($_POST["cari"])) {
		$penemu = cari($_POST["keyword"]);
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	
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
	        <!--   <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div> -->
	          <a class="dropdown-item" href="#">Cetak Sekarang</a>
	    </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">173040028</a>
	      </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="" method="POST">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="text" name="keyword" id="keyword" placeholder="Kolom Pencarian..."  autocomplete="off">Search</button>
	     </form>
    		  <div class="ml-2">
    	  <a class="btn btn-outline-primary" a href="php/login.php">Login</a>
    	  </div>
  	</div>
</nav>
<!--/.Navbar-->
<div class="container ">
	<div class="card">
		<?php foreach ($penemu as $pen) : ?>	
  		<div class="card-header"> Profil Penemu </div>
  			<div class="card-body"  align="center">
			    <h2 class="card-title"><?= $pen['penemu'] ?></h2>
			    	<p class="card-text">
			    	<img src="assets/image/<?= $pen['gambar_penemu'] ?>" width="150px" height="200px"><hr>
				      <p class="btn btn-secondary"><?= $pen['temuan'] ?></p>
				      <p class="btn btn-danger"><?= $pen['nama_negara'] ?></p>
				      <p class="btn btn-info"><?= $pen['tahun_ditemukan'] ?></p>
  					</p>
		</div>
  		<?php endforeach ?>
	</div>
</div>

<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>