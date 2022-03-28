<?php include "koneksi.php" ;

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM login where email='$email' and password='$password'");

$cek = mysqli_num_rows($data);

if ($cek>0) {
	header("location:hasil.html?msg=success");
}

else{
	echo "error";
}

?>