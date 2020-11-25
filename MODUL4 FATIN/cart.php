<?php
session_start();
require 'function.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM cart ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <title>Cart</title>

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
    </nav>
    <br><br><br>


    <div class="isi_body" style="margin-top: 50px; margin-left: 50px; margin-right: 50px;" method="post">
    <table class="table">
        <thead class="thead-striped">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php
          $no = 1;
          $sql = mysqli_query($conn, "SELECT * FROM cart");
          while($data=mysqli_fetch_array($sql)){
        ?>


    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><?= $data['nama_barang']; ?></td>
      <td><?= $data['harga']; ?></td>
      <td><a href='cart.php?id=$user_data[id]' button type='submit' class='btn btn-primary'>Hapus</a></td>
    </tr>


    </tbody>
    </table>
    </div>

    <?php 
       }
    ?>



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