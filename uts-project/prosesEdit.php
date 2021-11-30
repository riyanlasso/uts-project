<?php
include "koneksi.php";
$target_path = "uploads/";

$id = $_POST['id'];
$nama = $_POST['game'];
$image = $target_path . basename($_FILES['images']['name']);

$query = "UPDATE game SET game='$nama', gambar='$image'
	WHERE id='$id'";

if (move_uploaded_file($_FILES['images']['tmp_name'], $image)) {
	if (mysqli_query($connect, $query)) {
		echo "Data berhasil diupdate"; ?>
		<a href="halamanAdmin.php">Lihat Data</a>
<?php
	} else {
		echo "Data gagal diupdate <br>" . mysqli_error($connect);
	}
} else {
	echo "Data gagal dirubah , pastikan anda mengubah datanya";
}
?>