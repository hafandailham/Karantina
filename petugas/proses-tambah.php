<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$nama_petugas = $_POST['nama_petugas'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telp = $_POST['telp'];
	$id_level = 1;

	$sql = "INSERT INTO petugas (nama_petugas,username,password, telp, id_level) VALUES ('$nama_petugas', '$username', '$password', '$telp', '$id_level')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Registrasi Berhasil');window.location='../index.php';</script>";
	}
}else{
	header("location: tambah.php");
}

?>
