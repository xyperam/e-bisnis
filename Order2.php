
<?php session_start();

if(!isset($_SESSION["login"])){


  header("Location: Login.php");
  exit;
}





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
              <a class="nav-link animated bounceInRight" href="Beranda2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated bounceInRight" style = "animation-delay: 0.5s" href="Profil.php">Profile</a>
              <li class="nav-item">
              <a class="nav-link animated bounceInRight" style = "animation-delay: 1s" href="logout.php">Logout</a>
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
                <img src="img/22.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/23.jpg" class="d-block w-100">
            </div>
            
          </div>
        </div>
      </div>

        <div class="col-md-6 col-sm-6">

          <h2>Tauco Cap Maung 250gr</h2>
          <hr>

          <p class="animated slideInRight">Tauco Cap Maung dengan isi 250gr merupakan varian size yang dikemas dengan menggunakan jar. Tauco Cap Maung dengan varian 250ml ini sangat cocok dibawa kemana-mana karena tidak terlalu memakan kapasitas penyimpanan.
          <a href="#Order">Order Here</a>
        </p>
        </div>
      </div>
    </div>

  <div class="Bag2">
    <div class="row">
      <div class="col-md-6 col-sm-6">

          <h2>Tauco Cap Maung 330ml</h2>
          <hr>

          <p class="animated slideInUp">Tauco Cap Maung dengan isi 330ml merupakan varian size yang dikemas dengan menggunakan botol kaca berkapasitas 330ml. Tauco dengan varian 330ml sangat cocok digunakan untuk keperluan memasak dengan mengandalkan tauco sebagai bumbu utama .
          <a href="#Order">Order Here</a>
        </p>

      </div>

      <div class="col-md-6 col-sm-6">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner animated slideInUp">
            <div class="carousel-item active">
                <img src="img/24.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/25.jpg" class="d-block w-100">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<br>
<div class="Bag3">
    <div class="row">
      <div class="col-md-6 col-sm-6">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner animated slideInLeft">
            <div class="carousel-item active">
                <img src="img/18.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/19.jpg" class="d-block w-100">
            </div>
            
          </div>
        </div>
      </div>

        <div class="col-md-6 col-sm-6">

          <h2>Paket Tauco Cap Maung</h2>
          <hr>

          <p class="animated slideInRight">Paket Tauco Cap Maung dengan merupakan varian yang dikemas dengan menggunakan dus yang berisikan beberapa botol atau jar Tauco Cap Maung. Paket Tauco Cap Maung dengan ini sangat cocok sebagai oleh-oleh khas Cianjur untuk diberikan kepada kerabat ataupun teman-temanmu.
          <a href="#Order">Order Here</a>
        </p>
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
          <h2>Price List Tauco Cap Maung Ny.Tasma</h2>
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
          <h1>Tauco Cap Maung 250gr</h1>
        </div>
        <div class="panel-body">
          <th>Harga</th>
        </div>
        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
            $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>1pcs</h4>
        </div>
      </div>

    </div>

    <div class="col-sm-2 col-md-2">
      <!-- KOLOM KOSONG -->
    </div>

    <div class="col-sm-4 col-md-4">

     <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Tauco Cap Maung 330ml</h1>
        </div>
        <div class="panel-body">
          <th>Price</th>
        </div>
        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
         $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>1pcs</h4>
        </div>
      </div>

    </div>


    <div class="col-sm-4 col-md-4">
      <!-- KOLOM KOSONG -->
    </div>
 <div class="col-sm-4 col-md-4">

     <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Paket Tauco Cap Maung</h1>
        </div>
        <div class="panel-body">
          <th>Harga</th>
        </div>
        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
         $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>Tauco Cap Maung 330ml 6pcs</h4>
        </div>

        <div class="panel-footer">
          <h3><?php $result= mysqli_fetch_row ($harga);
         $nomor=number_format($result[2],0,",",".");
          echo "RP. $nomor";
          echo "<br />"; ?></h3>
          <h4>Tauco Cap Maung 250gr 6pcs</h4>
        </div>

      </div>

    </div>

  </div>
</div>

</section>
<!-- Akhir Price List -->




<!-- Awal Order Produk -->
<section>
  <div class="container-fluid">
    <div class="Order" id="Order">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h2>Form Order</h2>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="Order1" id="Order1">
      <div class="row">

        <div class="col-md-2 col-sm-2">
          <!-- KOLOM KOSONG -->
        </div>

        <div class="FormOrder d-flex justify-content-center">
        <div class="col-md-8 col-sm-8">
          <p style="margin-top: 1rem;">Yuk Beli Tauco Cap MAung Ny.Tasma</p>

        <form action="" method="post">
            <div class="form-group">
              <label for="services">Pilih Varian</label>
              <select class="form-control" name="services" id="services">
                <option>1. Tauco Cap Maung 250gr</option>
                <option>2. Tauco Cap Maung 330ml</option>
                <option>3. Paket Tauco Cap Maung 250gr</option>
                <option>4. Paket Tauco Cap Maung 330ml</option>
              </select>
            </div>

          <div class="form-group">
            <label for="amount">Jumlah Pesanan</label>
            <select type="amount" name="amount" class="custom-select my-1 mr-sm-2" id="amount">
              <option selected>Pilih....</option>
              <option value="1">1 Tauco Cap Maung</option>
              <option value="2">2 Tauco Cap Maung</option>
              <option value="3">3 Tauco Cap Maung</option>
              <option value="4">4 Tauco Cap Maung</option>
              <option value="5">5 Tauco Cap Maung</option>
              <option value="6">6 Tauco Cap Maung</option>

            </select>
          </div>

            <div class="form-group">
              <label for="FName">Nama Lengkap </label>
              <input type="text" name="FName" id="FName" class="form-control" placeholder="Enter your full name">
            </div>

            <div class="form-group">
              <label for="Email">Email </label>
              <input type="text" name="Email" id="Email" class="form-control" placeholder="example@gmail.com">
            </div>

            <div class="form-group">
              <label for="No_hp">No Telepon </label>
              <input type="text" name="No_hp" id="No_hp" class="form-control" placeholder="08129357044">
            </div>

            <div class="form-group">
              <label for="Address">Alamat</label>
              <input type="text" name="Address" id="Address" class="form-control" placeholder="enter your full address">
            </div>

            <div class="form-group">
              <label for="comment">Pesan</label>
              <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Optional If Required"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Send Order</button>

            <p style="margin-top: 1rem;">Untuk Lebih Lanjut Silahkan Hubungi 0869696969 Atau Bisa Langsung ke Toko Kami</p>
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
<!-- Akhir Order Produk -->




<!-- AWAL FOOTER --> 
<section>
  <footer>
    <div class="container-fluid">

      <div class="bawah">
        <div class="row">
          <div class="col-sm-12 col-md-12">

            <p>&copy;Tauco Cap Maung Ny.Tasma 2021 All Right Reserved || Made With <i class="fas fa-heart text-danger"></i> by Kelompok </p>


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