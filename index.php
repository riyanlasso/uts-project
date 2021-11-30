<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/styleLogin1.css">
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

<body class="bg-primary">

    <div class="box">

        <div class="container-fluid">


            <a class="navbar-brand navbar-brand-centered" href=" ">
                <img alt="Brand" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fjoystick.png" width=100px>

            </a>


        </div>

        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="example : riyanlasso" required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" required="required">
            <input type="submit" class="tombol_login" value="LOGIN">
            <p><br>belum punya akun?<br>
            <p>
                <a href="daftar.html" class="btn btn-secondary">DAFTAR</a>
                <br />
                <br />
        </form>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert'> akun anda tidak terdaftar </div>";
            }
        }
        ?>


    </div>

</body>

</html>