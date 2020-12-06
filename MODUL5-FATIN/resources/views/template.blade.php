<!DOCTYPE html>
<html>
<head>
    <title>Tutorial CRUD Laravel 8 untuk Pemula - Ilmucoding.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
      .navbar{
            text-align: center;
            padding-left: 37%;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ url('/home') }}">HOME</a>
            <a class="nav-item nav-link" href="{{ url('/products') }}">PRODUCT</a>
            <a class="nav-item nav-link" href="{{ url('/order') }}">ORDER</a>
            <a class="nav-item nav-link" href="{{ url('/history') }}">HISTORY</a>
          </div>
        </div>
    </div>
      </nav>
      
<div class="container">
    @yield('content')
</div>
 
</body>
</html>