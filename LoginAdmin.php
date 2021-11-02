<?php 
session_start();

if(isset($_SESSION["loginadmin"])){

  header("Location: Admin.php");
  exit;
}


require 'function.php';

if(isset($_POST["login"])){

$username = $_POST["username"];
$password = $_POST["password"];


  $result = mysqli_query($conn,"SELECT * FROM admin WHERE username ='$username'");


  //cek username

  if (mysqli_num_rows($result)===1 ) {
    
    //cek password
    $row=mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
// keluarkan hasil
      

      //set session
        $_SESSION['nama_user'] = $row['nama'];
      $_SESSION["loginadmin"] = true; //session login true
      $_SESSION['User']=$_POST['username'];
      header("Location: Admin.php");
      exit;
    }
    $error = true;


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


    <link rel="stylesheet" type="text/css" href="css/sepatu.css">
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
          </ul>
        </div>
        
    </div>
  </nav>
<!-- Akhir Navbar -->



<!-- AWAL LOGIN -->
<section>
  <div class="container-fluid">
    <div class="Login1">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h2>Login Admin</h2>

          <?php if (isset($error)) : ?>
            <p style="color : red;font-style: bold; ">USER NAME / PASSWORD SALAH</p>
<?php endif; ?>



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
    <div class="Masuk2">
      <div class="row">

        <div class="col-md-2 col-sm-2">
          <!-- KOLOM KOSONG -->
        </div>

        <div class="FormLogin d-flex justify-content-center">
        <div class="col-md-8 col-sm-8">

            <p>Oh hi... do you already have an account ? if yes you can log in here, if you don't have an account you cansign up</a></p>

          <form action="" method="post">
            <div class="form-group">
              <label for="username">Username </label>
              <input type="text" id="username" name="username" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>

            <button type="submit" name="login" class="btn btn-dark btn-lg">Submit</button>
          </form>

        </div>
      </div>

        <div class="col-md-2 col-sm-2">
          <!-- KOLOM KOSONG -->
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