<?php
include "koneksi.php";
$target_path = "daftarMobileLegend/";
$id = $_POST['id'];
$nama = $_POST['item'];
$harga = $_POST['harga'];
$image = $target_path . basename($_FILES['images']['name']);

$sql = "INSERT INTO daftar_mobilelegend(id, item,harga,gambar)
			VALUES('$id', '$nama','$harga', '$image')";

if (move_uploaded_file($_FILES['images']['tmp_name'], $image)) {
	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan"; ?>
		<a href="halamanAdmin.php">Kembali ke Home</a>
<?php
	} else {
		echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
	}
} else {
	echo "Error upload file";
}

mysqli_close($connect);
?>