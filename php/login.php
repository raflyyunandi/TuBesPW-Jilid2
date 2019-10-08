<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "", "pw_173040027") or die ("Koneksi ke DB gagal");

  if(isset($_COOKIE['id']) && isset($_COOKIE['password'])){
    $id = $_COOKIE['id'];
    $username = $_COOKIE['username'];

    $results = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");
    var_dump($results);
    $row = mysqli_fetch_assoc($results);

        if($key === hash('sha256', $row['username'])){
        $_SESSION['login']=true;
    }
}

if(isset($_SESSION['login'])){
    header("location: ../admin/index.php"); 
}

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $results=mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

if(mysqli_num_rows($results) === 1){
    $row = mysqli_fetch_assoc($results);

if(password_verify($password, $row['password'])){
    $_SESSION["login"] = true;
       header("location: ../admin/index.php");
        exit();
    }    
  }
  $error = true;
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
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
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="POST" action="">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <div class="mb-2">
                <label ><h5><?php if (isset($error)) {
			echo "Username atau Password salah!!!";
				} ?></h5></label>

              <p align="center">admin/admin</p>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login" value="login">Login</button>
              <br class="my-2"> Belum punya akun?
              <a href="register.php" style="text-decoration: none;">Daftar !!</a>
              	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</body>
</html>