<?php 
	require '../php/functions.php';

	if (isset($_POST['tambah'])) {
		if(tambah($_POST) > 0) {
			echo "<script>
					alert('Data Berhasil ditambahkan!');
					document.location.href = 'index.php';
					</script>";
		} else {
			echo "<script>
					alert('Data Gagal ditambahkan!');
					document.location.href = 'index.php';
					</script>";
		}
	}
	$negara = query("SELECT * FROM negara");
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
	      <a class="btn btn-outline-danger my-2 my-sm-0" href="index.php" >Kembali</a>
	     </form>
    		
  	</div>
</nav>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Tambah Data Penemu</h5>
            <form class="form-signin" method="POST" action="">
              <div class="form-label-group">
                <input type="text" name="nomor" id="nomor" class="form-control" placeholder="Nomor" required autofocus>
                <label for="nomor">Nomor</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="penemu" id="penemu" class="form-control" placeholder="Penemu" required>
                <label for="inputPassword">Penemu</label>
              </div>
               <div class="form-label-group">
                <input type="text" name="temuan" id="temuan" class="form-control" placeholder="Temuan" required>
                <label for="inputPassword">Temuan</label>
              </div>
               <div class="form-label-group">
                <input type="password" name="tahun_ditemukan" id="tahun_ditemukan" class="form-control" placeholder="tahun ditemukan" required>
                <label for="tahun_ditemukan">Tahun Ditemukan</label>
              </div>
          	 <div class="form-label-group">
          	 		<select  class="form-control" name="id_negara" id="id_negara">
          	 			<?php foreach ($negara as $n) { ?>
               <option value="<?= $n['id_negara'] ?>"><?= $n['nama_negara']; ?></option>
                         <?php } ?>
                         <select name="id_negara" >
                <label for="inputPassword">Asal Negara</label>
              </div>

              <div class="form-label-group">
                <input  type="file" name="gambar_penemu" id="gambar_penemu">
                <label for="gambar_penemu">Gambar Penemu</label>
              </div>

       
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="tambah" >OK</button>
              	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>