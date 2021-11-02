<?php
//include('dbconnected.php');
include ('function.php');
//ambil data di url


$id = $_POST["id"];
$produk = $_POST["produk"];
$harga = $_POST["harga"];


$query = mysqli_query($conn,"UPDATE harga SET 
		paket='$paket',
		harga='$harga'
		WHERE id='$id'");

echo "<script>
	alert('Data gagal Diubah');
	document.location.href='ubah.php';
	</script>";






//mysql_close($host);
?>