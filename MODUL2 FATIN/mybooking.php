<?php 
	$nama = $_POST['name'];
	$checkin = $_POST['checkin'];
	$roomtype = $_POST['roomtype'];
	$service = $_POST['service'];
	$phone = $_POST['phone'];
	$duration = $_POST['duration'];
	$standard = '90';
	$superior = '150';
	$luxury = '200';
	$price;
	$checkout = date("yy-m-d", strtotime("+".$duration."days", strtotime($checkin)));
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

	<title>Checkout</title>
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
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br><br>

    <!-- tabel -->
    <div style="padding-top: 50px; padding-left: 45px; padding-right: 45px;">
    <table class="table" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
      <th scope="col">Room Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <th scope="row"> <?= (rand() . "<br>");?> </th>
      <td> <?= $nama ?> </td>
      <td> <?= $checkin ?> </td>
      <td> <?= $checkout ?> </td>
      <td> <?= $roomtype ?> </td>
      <td> <?= $phone ?> </td>
      <td> <?php 
      		switch ($service) {
              case "Room Service":
                $addservice = "Room Service";
                break;
              case "Breakfast":
                $addservice = "Breakfast";
                break;
              case "Room Service, Breakfast":
                $addservice = "Room Service, Breakfast";
                break;
              case " ":
                $addservice = "no Service";
                break;
            } 
            echo "$addservice"; ?>
        	 </td>
      		 

      <td> <?php
      		if ($roomtype) {
		        if($duration == ""){
		        	echo "Isi durasi terlebih dahulu";
		        } elseif ($roomtype == "Standard") {
		        	$price = $standard * $duration;
		        	echo "$ $price";
		        } elseif ($roomtype == "Superior") {
		        	$price = $superior * $duration;
		        	echo "$ $price";
		        } elseif ($roomtype == "Luxury") {
		        	$price = $luxury * $duration;
		        	echo "$ $price";
		        }
		    }
		      	?> </td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>
