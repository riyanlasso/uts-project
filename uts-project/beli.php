<html>

<head>
    <title>Halaman Beli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width , initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/styleGuest1.css">
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


        <table class="table table-bordered table-striped table-hover">
            <?php
            include "koneksi.php";
            $idgame = $_GET["id"];
            ?>
            <?php
            if ($idgame == 1) {

                $query = "SELECT * FROM daftar_valorant";
                $result = mysqli_query($connect, $query);
            ?>

                <h2>VALORANT</h2>
                <tr>
                    <th> ID </th>
                    <th> VALORANT POINTS </th>
                    <th> ITEM </th>
                    <th>HARGA</th>
                    <th>BELI</th>
                </tr>

                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>

                        <tr>
                            <td> <?php echo $row["id"] ?> </td>
                            <td> <?php echo $row["item"] ?> </td>
                            <td> <img src="<?php echo $row["gambar"] ?>" width="100px"></td>
                            <td> <?php echo "Rp." ?><?php echo $row["harga"] ?> </td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Beli
                                </button>

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Transaksi Selesai
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                    <?php
                    }
                } else {
                    echo "0 result";
                }
                    ?>
                        </tr>
                    <?php
                } elseif ($idgame == 2) {
                    $query = "SELECT * FROM daftar_mobilelegend";
                    $result = mysqli_query($connect, $query);
                    ?>
                        <h2>MOBILE LEGEND</h2>
                        <tr>
                            <th> ID </th>
                            <th> DIAMOND </th>
                            <th> ITEM </th>
                            <th>HARGA</th>
                            <th>BELI</th>
                        </tr>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>

                                <tr>
                                    <td> <?php echo $row["id"] ?> </td>
                                    <td> <?php echo $row["item"] ?> </td>
                                    <td> <img src="<?php echo $row["gambar"] ?>" width="100px"></td>
                                    <td> <?php echo "Rp." ?><?php echo $row["harga"] ?> </td>
                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Beli
                                        </button>

                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Transaksi Selesai
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    </td>
                            <?php
                            }
                        } else {
                            echo "0 result";
                        }
                            ?>
                                </tr>
                            <?php
                        } elseif ($idgame == 3) {
                            $query = "SELECT * FROM daftar_callofduty";
                            $result = mysqli_query($connect, $query);
                            ?>
                                <h2>CALL OF DUTY</h2>
                                <tr>
                                    <th> ID </th>
                                    <th> JUMLAH CP </th>
                                    <th> ITEM </th>
                                    <th>HARGA </th>
                                    <th>BELI</th>
                                </tr>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                ?>

                                        <tr>
                                            <td> <?php echo $row["id"] ?> </td>
                                            <td> <?php echo $row["item"] ?> </td>
                                            <td> <img src="<?php echo $row["gambar"] ?>" width="100px"></td>
                                            <td> <?php echo "Rp." ?><?php echo $row["harga"] ?> </td>
                                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Beli
                                                </button>

                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Transaksi Selesai
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                    <?php
                                    }
                                } else {
                                    echo "0 result";
                                }
                                    ?>
                                        </tr>
                                    <?php
                                }
                                    ?>

        </table>
    </div>
</body>

</html>