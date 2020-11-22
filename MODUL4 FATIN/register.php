<?php
require 'functions.php';

if(isset($_POST["daftar"])){

  if(daftar($_POST) > 0){
    echo '<div class="alert alert-warning" role="alert"> Registrasi berhasil! </div>';
  } else {
    echo mysqli_error($conn);
}
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

	<title>Register</title>
</head>

<body style=" background-color: #E8F6FC;">>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mynav">
      <div class="container">
      <a class="navbar-brand" href="#">WAD Beauty</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br><br><br>

    <!-- form -->
    <div class="container">
    <div class="card" >
    <div class="card-body" style="margin-left: 200px; margin-right: 200px; margin-top:50px;">
            <form action="" method="POST" >
                <h2 align="center">Register </h2><hr>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama"id="nama" class="form-control" autofocus autocomplete="off" placeholder="Masukkan nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" autofocus autocomplete="off" placeholder="Masukan alamat email" required>
                </div>
                <div class="form-group">
                    <label for="hp">No. Handphone</label>
                    <input type="number" name="hp" id="hp" class="form-control" autofocus autocomplete="off" placeholder="Masukkan nomor handphone" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Buat kata sandi" required>
                </div>
                <div class="form-group">
                    <label for="password2">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password2" id="password2" class="form-control" autocomplete="off" placeholder="Konfirmasi kata sandi" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="daftar" id="daftar" class="btn btn-primary">Daftar</button><br><br>
                    <label>Sudah Punya Akun?</label><a href="login.php">  Login</a><br><br>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
     </body>
</html>