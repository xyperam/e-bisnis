<?php 
//koneksi ke data base
$conn = mysqli_connect("localhost","root","","cucisepatu");

//fungsi query
function query($query){

global $conn;
$result = mysqli_query($conn,$query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[]= $row;
}
return $rows;

}


// fungsi registrasi
function registrasi($data){

global $conn;

$email=($data["email"]);
$nama=($data["nama"]);
$username =strtolower(stripslashes($data["username"]));
$password=mysqli_real_escape_string($conn, $data["password"]);
$password2=mysqli_real_escape_string($conn, $data["password2"]);


//cek username sudah ada atau belum

$result = mysqli_query($conn,"SELECT username FROM user WHERE username='$username' ");


if (mysqli_fetch_assoc($result)) {
	echo "<script>
alert('username sudah terdaftar!')
</script>";
return false;
}

//cek konfirmasi password
if ($password !== $password2) {
	echo "<script>
	alert('konfirmasi password tidak sesuai!');
	</script>";
	return false;
}



$password=password_hash($password,PASSWORD_DEFAULT);
//tambah user baru ke database
mysqli_query($conn,"INSERT INTO user VALUES('','$email','$nama','$username','$password')");


return mysqli_affected_rows($conn);
}



function order ($data){

global $conn;


$services=($data["services"]);
$amount=($data["amount"]);
$Fname=($data["FName"]);
$Email=($data["Email"]);
$No_hp=($data["No_hp"]);
$Address=($data["Address"]);
$comment=($data["comment"]);

mysqli_query($conn,"INSERT INTO pesan VALUES('','$services','$amount','$Fname','$Email','$No_hp','$Address','$comment')");

}

function registrasiAdmin($data){

global $conn;

$email=($data["email"]);
$nama=($data["nama"]);
$username =strtolower(stripslashes($data["username"]));
$password=mysqli_real_escape_string($conn, $data["password"]);
$password2=mysqli_real_escape_string($conn, $data["password2"]);


//cek username sudah ada atau belum

$result = mysqli_query($conn,"SELECT username FROM admin WHERE username='$username' ");


if (mysqli_fetch_assoc($result)) {
	echo "<script>
alert('username sudah terdaftar!')
</script>";
return false;
}

//cek konfirmasi password
if ($password !== $password2) {
	echo "<script>
	alert('konfirmasi password tidak sesuai!');
	</script>";
	return false;
}



$password=password_hash($password,PASSWORD_DEFAULT);
//tambah user baru ke database
mysqli_query($conn,"INSERT INTO admin VALUES('','$email','$nama','$username','$password')");


return mysqli_affected_rows($conn);
}

function ubah($data){
global $conn;
$id	=$data["id"];
$produk = $data["produk"];
$harga = $data["harga"];

//query update
$query = "UPDATE harga SET 
		produk = '$produk',
		harga =$harga
		WHERE id = $id
";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

echo "<script>
	alert('data berhasil diubah');
	document.location.href='admin.php';
	</script>";

}





 ?>