<?php 


require 'function.php';
if (isset($_POST["submit"])) {
 if( order($_POST)>0){
echo "<script>
alert('Order berhasil di kirimkan');
</script>";
}else{
  echo mysqli_error($conn);
}
}

$harga = mysqli_query($conn,"SELECT * FROM harga");



 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="css/sepatu.css">
    <link rel="stylesheet" type="text/css" href="css/animated.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>www.taucocapmaung.com</title>
  </head>
  <body>



<!-- Nvbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark animated slideInDown">
    <div class="container-fluid">
    <a class="navbar-brand" href="Beranda1.php">WHITESHOES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link animated bounceInRight" href="Beranda1.php">Home</a>
            </li>
              <li class="nav-item">
              <a class="nav-link animated bounceInRight" style = "animation-delay: 1s" href="Login.php">Sign Up / Login</a>
            </li>
          </ul>
        </div>
        
    </div>
  </nav>
<!-- Akhir Navbar -->



<!-- Awal Info Produk -->
<section>
<div class="container-fluid">
  
  <div class="Bag1">
    <div class="row">
      <div class="col-md-6 col-sm-6">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner animated slideInLeft">
            <div class="carousel-item active">
                <img src="img/7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/1.jpg" class="d-block w-100">
            </div>
          </div>
        </div>
      </div>

        <div class="col-md-6 col-sm-6">

          <h2>Wash & Treatment</h2>
          <hr>

          <p class="animated slideInRight">Since your shoes out of the box, anything can happen to it. We provide best treatment and service with love.
          We treat your shoes with a gentle touch and softly, that your shoes will clean and cleaner than before. This is a chance for our costumer to get
          an extremely premium wash & treatment as soon as possible. as white as new like whiteshoes.
          <a href="Login.php">Order Here</a>
        </p>
        </div>
      </div>
    </div>

  <div class="Bag2">
    <div class="row">
      <div class="col-md-6 col-sm-6">

          <h2>Repair & Repaint</h2>
          <hr>

          <p class="animated slideInUp">We provide you a detail and nice coloring for your shoes. We concern about scratch in shoes that
          we came to repair. The repaint process also has a great concern that we use best material for your shoes and detail in the process
          this is the chance for our costumer to get their old shoes like new, as white as new like whiteshoes.
          <a href="Login.php">Order Here</a>
        </p>

      </div>

      <div class="col-md-6 col-sm-6">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner animated slideInUp">
            <div class="carousel-item active">
                <img src="img/8.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/5.jpg" class="d-block w-100">
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
</section>
<!-- Akhir Info Produk -->



<!-- Awal Price List -->
<section>
  <div class="container-fluid">
    <div class="Price" id="Price">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h2>Price List</h2>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  
<div class="List" id="List">
  <div class="row">

    <div class="col-sm-1 col-md-1">
      <!-- KOLOM KOSONG -->
    </div>

    <div class="col-sm-4 col-md-4">

     <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Wash & Treatment</h1>
        </div>
        <div class="panel-body">
          <th>Price</th>
        </div>
        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
            $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>Completed in 24 hours</h4>
          <a class="btn btn-lg" href="Login.php" role="button">Order Now</a>
        </div>
      </div>

    </div>

    <div class="col-sm-2 col-md-2">
      <!-- KOLOM KOSONG -->
    </div>

    <div class="col-sm-4 col-md-4">

     <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Repair & Repaint</h1>
        </div>
        <div class="panel-body">
          <th>Price</th>
        </div>
        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
         $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>Completed in 24 hours</h4>
          <a class="btn btn-lg" href="Login.php" role="button">Order Now</a>
        </div>
      </div>

    </div>

    <div class="col-sm-1 col-md-1">
      <!-- KOLOM KOSONG -->
    </div>

  </div>
</div>

</section>




<!-- Akhir Price List -->



<!-- AWAL FOOTER --> 
<section>
  <footer>
    <div class="container-fluid">

      <div class="bawah">
        <div class="row">
          <div class="col-sm-12 col-md-12">

            <p>&copy;White Shoes 2020 All Right Reserved || Made With <i class="fas fa-heart text-danger"></i> by Kelompok </p>


          </div>
        </div>
      </div>

      <div class="bawah1">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            
            <p>Social Media : </p>

          </div>
        </div>
      </div>

      <div class="sosmed d-flex justify-content-center">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <li>
              <i class="fa-2x fab fa-instagram text-white ml-2"></i>
              <i class="fa-2x fab fa-facebook-square text-white ml-2"></i>
              <i class="fa-2x fab fa-twitter text-white ml-2"></i>
              <i class="fa-2x fab fa-telegram text-white ml-2"></i>
              <i class="fa-2x  fab fa-whatsapp text-white ml-2"></i>
            </li>
          </div>
        </div>
      </div>


    </div>
  </footer>
    
 
</section>
 <!-- AKHIR FOOTER -->








        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>