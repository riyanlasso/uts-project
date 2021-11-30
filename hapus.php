<?php
include "koneksi.php";
$id = $_GET['id'];

$query = "DELETE FROM game WHERE id = '$id' ";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Data berhasil dihapus";
?>
    <a href="halamanAdmin.php"> Lihat data </a>
<?php
} else {
    echo "Data gagal dihapus" . mysqli_error($connect);
}
?>