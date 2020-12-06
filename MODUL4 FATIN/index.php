<?php
session_start();
require 'functions.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['cart'])) {
    $cart = cart($_POST);
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
    

    <title>Index</title>
    
    <style>
        .kotak-atas{
            margin-top: 30px;
            margin-left: 90px;
            margin-right: 90px;
        }

        .kotak-bawah{
            margin-top: 0px;
            margin-left: 75px;
            margin-right: 75px;
            margin-bottom: 30px;
        }
        
        
    </style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mynav">

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
    <br><br><br>


        
    <div class="kotak-atas" method="post">
    <div class="card bg-light text-dark">
        <div class="card-body text-center">
            <h3>WAD Beauty</h3>
            <p>Skin Care murah tapi berkualitas. Hayu dibeli dibelii...</p></div>
    </div>
    </div>
    </div>
    <div class="kotak-bawah">
    <div class="card-body">
        <div class="card-group">
    <div class="card">
        <img class="card-img-top" src="gambar/1.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" name="nama_barang" id="nama_barang">Body Lotion Travel Pack</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem cupiditate numquam, magni architecto laudantium distinctio, accusantium, soluta atque facilis praesentium itaque ducimus quibusdam aliquam optio esse a. Rem, ullam obcaecati.</p>
        <hr>
        <h5 name="harga" id="harga">Rp 50.000</h5></div>
        <div class="card-footer">
        <input type="submit" name="cart" id="cart" class="btn btn-primary" onClick="location.href='cart.php'" value="Tambahkan ke keranjang">
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="gambar/2.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" name="nama_barang" id="nama_barang">The Ordinary Travel Packet</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dicta consectetur aliquam cumque laboriosam aspernatur? Quo voluptate eum explicabo nostrum, placeat dolore magnam neque, earum commodi voluptas totam odio quaerat!</p>
        <hr>
        <h5 name="harga" id="harga">Rp 300.000</h5></div>
        <div class="card-footer">
        <input type="submit" name="cart" id="cart" class="btn btn-primary" onClick="location.href='cart.php'" value="Tambahkan ke keranjang">
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="gambar/3.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" name="nama_barang" id="nama_barang">Serum Mahall</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, ab vero. Officia ratione facilis molestiae architecto laboriosam esse eos expedita autem amet, mollitia, reiciendis nam facere quia inventore fuga praesentium.</p>
        <hr>
        <h5 name="harga" id="harga">Rp 200.000</h5></div>
        <div class="card-footer">
        <input type="submit" name="cart" id="cart" class="btn btn-primary" onClick="location.href='cart.php'" value="Tambahkan ke keranjang">
        </div>
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