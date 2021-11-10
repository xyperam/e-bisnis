<?php 



session_start();

if(!isset($_SESSION["loginadmin"])){

  header("Location: LoginAdmin.php");
  exit;
  }



include 'function.php';

//ambil data dari URL
$id = $_GET["id"];
// query data berdasarkan id
$query= query("SELECT * FROM  harga WHERE id = $id ")[0];


if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
        </script> 
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!');
    </script>
    ";
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
<div class="latar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent animated slideInDown">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">WHITESHOES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link animated bounceInRight" href="Admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link animated bounceInRight" style = "animation-delay: 1.5s" href="Logout.php">Logout</a>
            </li>

          </ul>
        </div>
    </div>
  </nav>
<!-- Akhir Navbar -->


<!-- PRICE LIST -->
<!-- PRICE LIST -->
<section>
    <div class="container-fluid">
      <div class="PriceAdmin" id="PriceAdmin">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 style="color: white;">Ubah  Price List</h2>
            <hr>
          </div>
        </div>
      </div>
    </div>
</section>



<section>
  <div class="container-fluid">
    <div class="TabelPeice">
      <div class="row">
        <div class="col-sm-12 col-md-12">

          <form action="" method="post">
            <div class="form-group">
                         <input type="text" name="id" required value="<?= $query['id']?>">
                        <div class="form-group">
                          <label for="produk">Produk</label>
                          <input type="text" name="produk" class="form-control" required value="<?= $query['produk']?>">      
                        </div>
                        <div class="form-group">
                          <label for="harga">Harga</label>
                          <input type="text" name="harga" class="form-control" required value="<?= $query['harga']?>">      
                        </div>

            <button type="submit"  name="submit" class="btn btn-dark btn-lg">Update</button>
          </form>

        
        </div>
      </div>
    </div>
  </div>

</section>
<!-- PRICE LIST SELESAI -->

<!-- PRICE LIST SELESAI -->





<!-- ORDER -->



<!-- AWAL FOOTER --> 
<section>
  <footer class="footer-dark bg-transparent">
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
            
            <p style="color: white;">Social Media : </p>

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
</div>


    

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