<html>

<head>
	<title>MOBILE LEGENDS</title>
	<link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/styleGuest1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width , initial-scale = 1">
	<link rel="stylesheet" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/css%2Fbootstrap.min.css">
	<script src='https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/jquery-3.5.1.js'></script>
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
		<a class="navbar-brand" href="halamanGuest.php">
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
					<a class="nav-link" href="halamanGuest.php">HOME</a>
				</li>
				<li>
					<a class="nav-link" href="beli.php">BELI</a>
				</li>
				<li>
					<a class="nav-link" href="profil.php">PROFIL</a>
				</li>
				<li>
					<a class="nav-link" href="logout.php">LOGOUT</a>
				</li>
			</ul>

		</div>
	</nav>

	<div class="container-fluid">

		<h2>MOBILE LEGEND</h2>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th> ID </th>
				<th> NAMA ITEM </th>
				<th> DIAMOND </th>
				<th> HARGA </th>
			</tr>
			<?php
			include "koneksi.php";

			$query = "SELECT * FROM daftar_mobilelegend";
			$result = mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {
			?>
					<tr>
						<td> <?php echo $row["id"] ?> </td>
						<td> <?php echo $row["item"] ?> </td>
						<td> <img src="<?php echo $row["gambar"] ?>" width="100px"></td>
						<td> <?php echo $row["harga"] ?> </td>
				<?php
				}
			} else {
				echo "0 result";
			}
				?>
					</tr>
		</table>
	</div>
	<br><br><br>

</body>

</html>