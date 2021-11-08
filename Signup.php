<?php 


require 'function.php';
if (isset($_POST["register"])) {
 if( registrasi($_POST)>0){
echo "<script>
alert('user baru berhasil ditambahkan');
</script>";
}else{
  echo mysqli_error($conn);
}
}

 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="css/tauco.css">
    <link rel="stylesheet" type="text/css" href="css/animated.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>www.whiteshoes.com</title>
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
              <a class="nav-link animated bounceInRight" style = "animation-delay: 0.5s" href="Order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated bounceInRight" style = "animation-delay: 1s" href="login.php">Login</a>
            </li>
          </ul>
        </div>
        
    </div>
  </nav>
<!-- Akhir Navbar -->

<!-- AWAL SIGNUP -->
<section>
  <div class="container-fluid">
    <div class="Signup1">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h2>Form SignUp</h2>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- AKHIR LOGIN -->

<!-- AWAL FORM LOGIN -->
<section>
  <div class="container-fluid">
    <div class="FormSignUp d-flex justify-content-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">

          <p>Register with your email and get a variety of attractive promos that we offer every month</p>

          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email </label>
              <input id="email" type="text" name="email" class="form-control" placeholder="example@gmail.com">
            </div>

            <div class="form-group">
              <label for="nama">Full Name</label>
              <input id="nama" type="text" name="nama" class="form-control" placeholder="Bin laden">
            </div>
                        <div class="form-group">
              <label for="username">Username</label>
              <input id="username" type="text" name="username" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>

            <div class="form-group">
              <label for="password2">Re-Confrim Password</label>
              <input type="password" name="password2" class="form-control" id="password2" placeholder="Re-Confrim Password">
            </div>

            <button type="submit"  name="register" class="btn btn-dark btn-lg">Submit</button>
          </form>

        </div>
      </div>

      </div>

  </div>
</section>
<!-- AKHIR FORM LOGIN -->



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