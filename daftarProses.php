<?php
include "koneksi.php";


$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];


$sql = "INSERT INTO user(id, nama,username,password,level)
			VALUES('$id', '$nama', '$username','$password','$level')";
if (mysqli_query($connect, $sql)) {
	echo "Data berhasil ditambahkan";
?>
	<a href="index.php">Kembali ke Login</a>
<?php
} else {
	echo "Akun ini sudah terdaftar , masukkan username dan password yang berbeda<br>" . mysqli_error($connect);
}



mysqli_close($connect);
?>