<html>

<head>
	<title>Edit Data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width , initial-scale = 1">
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/styleGuest1.css">
	<link rel="stylesheet" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/css%2Fbootstrap.min.css">
	<script src='jquery-3.5.1.js'></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/js%2Fbootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<style>
		.navbar {
			border-radius: 50px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="halamanAdmin.php">
			<img alt="Brand" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fjoystick.png" width=100px>
		</a>
		<div class="itemku">
			<h1>ITEMKU<h1>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<style>

		</style>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ">
				<li>
					<a class="nav-link" href="halamanAdmin.php">HOME</a>
				</li>
				<li>
					<a class="nav-link" href="logout.php">LOGOUT</a>
				</li>
			</ul>

		</div>
	</nav>
	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM game WHERE id='$id'";
	$result = mysqli_query($connect, $query);
	?>
	<table rules="all">
		<form method="POST" action="prosesEdit.php" enctype="multipart/form-data">
			<?php
			while ($row = mysqli_fetch_array($result)) {
			?>
				<tr>
					<td> Id </td>
					<td> <input type="number" name="id" value="<?php echo $row['id']; ?>" readonly> </td>
				</tr>
				<tr>
					<td> Nama Game </td>
					<td> <input type="text" name="game" value="<?php echo $row['game']; ?>"> </td>
				</tr>
				<tr>
					<td> Gambar Produk </td>
					<td>
						<input type="file" name="images" value="<?php echo $row['gambar']; ?>">
						<img src="<?php echo $row["gambar"] ?>" width="100px">
					</td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" name="edit" value="Edit Game"></td>
				</tr>
			<?php
			}
			?>
		</form>
	</table>


</body>

</html>