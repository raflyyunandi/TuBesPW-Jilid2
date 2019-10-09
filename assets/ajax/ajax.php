<?php 
	require '../../php/functions.php';
	$keyword = $_GET["keyword"];

	$query = "SELECT nomor, penemu, temuan, nama_negara, tahun_ditemukan, gambar_penemu FROM penemu_terkenal NATURAL JOIN negara WHERE
			nomor LIKE '%$keyword%' OR 
			penemu LIKE '%$keyword%' OR 
			temuan LIKE '%$keyword%' OR 
			nama_negara LIKE '%$keyword%' OR 
			tahun_ditemukan LIKE '%$keyword%'";
	$penemu = query($query);

 ?>
 
 		
<div class="container" id="container">
	<div class="card">
		<?php if(empty($penemu)) :?>
			<h1 align="center" style="color: black;">Data tidak ditemukan!</h1>
		<?php else : ?>
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
		<?php endif; ?>
	</div>
</div>
