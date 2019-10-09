<?php 
	if (!isset($_GET['nomor'])) {
		header("Location: ../admin/index.php");
		exit;
	}

	require 'functions.php';
	$nomor = $_GET['nomor'];

	$pen = query("SELECT nomor, penemu, temuan, nama_negara, tahun_ditemukan, gambar_penemu FROM penemu_terkenal NATURAL JOIN negara WHERE nomor = $nomor")[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

 </head>
 <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="#">Rafly Yunandi Aliansyah</a>
	    <ul class="navbar-nav mr-auto">
	       <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">173040028</a>
	      </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="" method="POST">
	      <a class="btn btn-outline-danger my-2 my-sm-0" href="../admin/index.php" >Kembali</a>
	     </form>
    		
  	</div>
</nav>

<div class="container ">
	<div class="card card-signin my-5">
	 	<div class="card-header"> Profil Penemu </div>
  			<div class="card-body"  align="center">
			    <h2 class="card-title"><?= $pen['penemu'] ?></h2>
			    	<p class="card-text">
			    	<img src="../assets/image/<?= $pen['gambar_penemu'] ?>" width="150px" height="200px"><hr>
				      <p class="btn btn-secondary"><?= $pen['temuan'] ?></p>
				      <p class="btn btn-danger"><?= $pen['nama_negara'] ?></p>
				      <p class="btn btn-info"><?= $pen['tahun_ditemukan'] ?></p>
  					</p>
		</div>
	</div>
</div>

 </body>
 </html>