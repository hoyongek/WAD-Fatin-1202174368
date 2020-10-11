<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


    <title>Booking</title>

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
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Booking</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br>

    
  <table cellpadding="60" cellspacing="50">
  <tr>
    <td>
      <!-- Form -->
    <div class="form">
      <form class="" action="mybooking.php" method="post">
      <table border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><label>Name</label></td>
        </tr>
        <tr>
          <td><input type="textbox" style="width: 450px;" name="name"></td>
        </tr>
        <tr>
          <td><label>Check-in</label></td>
        </tr>
        <tr>
          <td><input type="date" name="checkin" style="width: 450px;"></td>
        </tr>
        <tr>
          <td><label>Duration</label></td>
        </tr>
        <tr>
          <td><input type="number" name="duration" style="width: 450px;"></td>
        </tr>
        <tr>
          <td><label style="font-size: 12px;">Day(s)</label></td>
        </tr> 
        <tr>
          <td><label>Room Type</label></td>
        </tr>
        <tr>
          <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="roomtype" style="width: 450px;">
              <option value="Standard">Standard</option>
              <option value="Superior">Superior</option>
              <option  value="Luxury">Luxury</option>
              </select></td>
        </tr>
        <tr>
          <td><label>Add Service(s)</label></td>
        </tr>
        <tr>
          <td><input type="checkbox" name="service" value="Room Type"> Room Service</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="service" value="Breakfast"> Breakfast</td>
        </tr>
        <tr>
          <td><label style="font-size: 12px;" >$ 20/Service</label></td>   
        <tr>
          <td><label>Phone Number</label></td>
        </tr>
        <tr>
          <td><input type="phone" name="phone" style="width: 450px;"></td>
        </tr>
        <tr>
          <td>
            <input type="submit" class="btn btn-primary btn-booking" style="width: 450px;" value='Book'></td>
        </tr>
      
      </table>
    </form>
    </div>
    </td>
    <td>

      <!-- gambar -->
    <div>
      <img src="standard.jpg" style="width: 35rem;">
    </div>
      </td>

      </tr>

    </table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>