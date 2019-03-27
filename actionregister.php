<?php
include 'koneksi.php';
session_start();
//$conn = mysqli_connect("localhost","root","","tugaspost");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con,"INSERT INTO user VALUES(null, '$username','$password')");
if ($result) {
	echo "register berhasil";
	echo "<a href='formlogin.php' >login</a>";
}
else{
	echo "yahh gaggal";
}

?>