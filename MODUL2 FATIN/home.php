<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


    <title>Home</title>

  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top mynav">
      <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br><br><br>

    <!-- judul -->
      <h2 style="text-align: center; color: #008891;">EAD HOTEL</h2>
      <p style="text-align: center; color: #008891;">Welcome to 5 Star Hotel</p>

    <br>

    <!-- crad-deck -->
        <div class="card-deck">

          <div class="card text-center" style="width: 18rem;" action="bookstandard.php" method="post">
            <img src="standard.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Standard</h5>
              <p class="card-text">$ 90/Day</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Facilities</li>
              <li class="list-group-item">1 Single Bed</li>
              <li class="list-group-item">1 Bathroom</li>
            </ul>
            <div class="card-body">
              <input type=button onClick="location.href='bookstandard.php'" class="btn btn-primary btn-standard" value='Book Now'>
            </div>
          </div>
        
          <div class="card text-center" style="width: 18rem;" action="booksuperior.php" method="post">
            <img src="superior.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Superior</h5>
              <p class="card-text">$ 150/Day</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Facilities</li>
              <li class="list-group-item">1 Double Bed</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
              <li class="list-group-item">1 Bathroom with hot water</li>
            </ul>
            <div class="card-body">
              <input type=button onClick="location.href='booksuperior.php'" class="btn btn-primary btn-superior" value='Book Now'>
            </div>
          </div>
        
          <div class="card text-center" style="width: 18rem;" action="bookluxury.php" method="post">
            <img src="luxury.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Luxury</h5>
              <p class="card-text">$ 200/Day</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Facilities</li>
              <li class="list-group-item">2 Bathroom with hot water</li>
              <li class="list-group-item">1 Kitchen</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
            </ul>
            <div class="card-body">
              <input type=button onClick="location.href='bookluxury.php'" class="btn btn-primary btn-luxury" value='Book Now'>
            </div>
          </div>
        </div>
    <br><br>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>