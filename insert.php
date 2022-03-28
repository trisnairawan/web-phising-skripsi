<?php include "koneksi.php" ;

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "INSERT INTO login (email, password) VALUES ('$email', '$password')");

if ($data) {
	header("location:homepage/index.html?msg=success");
}

else{
	echo "error";
}

?>