<?php 

require 'functions.php';

if(isset($_POST['register'])){

 if(register($_POST)>0){
 	echo "<script>
 		alert('User Baru ditambahkan!');
    document.location.href = 'login.php';
 		</script>"	;
 } else {
    echo "<script>
        alert('User Gagal ditambahkan! anda akan kembali ke form login');
    document.location.href = 'login.php';
        </script>"  ;
 }

	}
?>

<!DOCTYPE html>
<html>
<head>
      
<title></title>
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
          <a class="btn btn-outline-danger my-2 my-sm-0" href="../index.php" >Kembali</a>
         </form>
            
    </div>
</nav>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Daftar Admin Baru</h5>
            <form class="form-signin" method="POST" action="">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label>Username</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label>Password</label>
              </div>
                <div class="form-label-group">
                <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Password" required>
                <label>Konfirmasi Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register" value="register">OK</button>
           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>