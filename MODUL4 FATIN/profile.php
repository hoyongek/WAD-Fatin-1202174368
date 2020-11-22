<?php
session_start();
require 'functions.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nav_color = '#f7f7f7';

if($_POST){
  $nav_color = $_POST['nav_color'];
} else { 
  if (isset($_COOKIE['background-color'])) {
    $_POST['nav_color'] = $nav_color = $_COOKIE['background-color'];
  }
}

// delete cookies
$msg = false;
if(isset($_POST['hapus_cookie'])) {
  setcookie('background-color', '', 0, '/');
}

// set cookie 1 menit
if(isset($_POST['submit'])) {
  setcookie('background-color', $_POST['nav_color'], strtotime('+1 day'), '/');
  $msg = 'Berhasil di Update!';
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
    

    <title>Profile</title>
    <style>
      .navbar{
        background-color: <?= $nav_color ?>;
      }
    </style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top mynav " method="post" action="">      
<div class="container">
      <a class="navbar-brand" href="#">WAD Beauty</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <img src="gambar/4.png" width="30" height="30">
          </li>
          <li class="nav-item ">
            <a class="nav-link active">Selamat Datang, </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            nama yg login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Log Out</a>
            </div>
        </li>
        </ul>
      </div>
      </div>
      </div>
    </nav>
    </div>
    <br><br><br>



    <div class="container">
  <form style="margin-left: 200px; margin-right: 200px; margin-top:50px;">
  <h2 align="center">Profile </h2>
    <div></div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="<?= $email; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="hp" name="hp">
    </div>
  </div>
  <hr>
  <div class="form-group row">
    <label for="password3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password3" name="password3">
    </div>
  </div>
  <div class="form-group row">
    <label for="password4" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password3" name="password4">
    </div>
  </div>
  <div class="form-group row">
      <label for="nav_color">Warna Navbar</label>
      <select class="custom-select col-md-4 mb-3" id="nav_color" name="nav_color">
      <?php
        $colors=array('#f7f7f7'=>'Light', '#292b2c'=>'Dark');
        foreach($colors as $name => $value){
          $selected = $name == @$_POST['nav_color'] ? 'SELECTED="SELECTED"' : '';
          echo '<option value="' . $name . '"' . $selected . '>' . $value . '</option>';
        }
        ?>
      </select>
      <div class="col-sm-3">
      </div>
    </div>
  <div class="form-group row">
    <div class="col-sm-12 text-center ">
      <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
    </div>
  </div>
  <div class="form-group row text-center">
    <div class="col-sm-12">
      <input type="submit" class="btn btn-light btn-block" name="hapus_cookie" value="Cancel">
    </div>
  </div>
</form>
</div>




 <!-- Copyright -->
 <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> WAD Beauty</a>
  </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
     </body>
</html>