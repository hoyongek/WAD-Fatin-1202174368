<?php 

session_start();

// cek cokie
if( isset($_COOKIE['login'])) {
  if( $_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


require 'functions.php';

if( isset($_POST["login"]) ) {

	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

	// cek email
	if( mysqli_num_rows($result) == 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if( isset($_POST['remember'])){

        // buat cookie
        setcookie('login', 'true', time() + 60);
      }

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

	<title>Login</title>
</head>
<body style=" background-color: #E8F6FC;">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mynav">
      <div class="container">
      <a class="navbar-brand" href="#">WAD Beauty</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br><br><br>

    <?php 
    if ( isset($error)){ 
      echo '<div class="alert alert-danger" role="alert"> Email / Password salah! </div>';
    } else {
      echo '<div class="alert alert-warning" role="alert"> Login berhasil! </div>';
    }
    ?>


    <!-- form -->
    <div class="container">
    <div class="card" >
    <div class="card-body" style="margin-left: 200px; margin-right: 200px; margin-top:50px;">
            <form action="" method="post">
                <h2 align="center">Login </h2><hr>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" autofocus autocomplete="off" placeholder="Masukan alamat email" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Buat kata sandi" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                    </div>
                <div class="text-center">
                    <button type="submit" name="login" id="login" class="btn btn-primary">Login</button><br><br>
                    <label>Belum Punya Akun?</label><a href="register.php"> Register</a><br><br>
                </div>
                
            </div>
            
            </div>
        </div>
            
    </div>
    </form>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
     </body>
</html>