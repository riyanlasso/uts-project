<?php
include "koneksi.php";;
$target_path = "uploads/";

$id = $_POST['id'];
$nama = $_POST['game'];
$image = $target_path . basename($_FILES['images']['name']);

$sql = "INSERT INTO game(id, game,gambar)
			VALUES('$id', '$nama', '$image')";

if (move_uploaded_file($_FILES['images']['tmp_name'], $image)) {
	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan"; ?>
		<a href="halamanAdmin.php">Kembali ke Home</a>
<?php
	} else {
		echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
	}
} else {
	echo "Tambah Data Gagal , Pastikan Setiap Data Berbeda ";
}

mysqli_close($connect);
?>