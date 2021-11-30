<html>

<head>
    <title>PROFIL</title>
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
                    <a class="nav-link" href="profil.php">PROFIL</a>
                </li>
                <li>
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
            </ul>

        </div>
    </nav>
    <script>
        var i = 0;
        $(document).ready(function() {
            $('.slider,#slider img').hide();
            showNextImage();
            setInterval('showNextImage()', 3000);
        });

        function showNextImage() {
            i++;
            $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            if (i == 6) {
                i = 0;
            }
        };
    </script>
    <div id="slider">
        <img id="sliderImage1" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fsatu.jpg">
        <img id="sliderImage2" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fdua.jpg">
        <img id="sliderImage3" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Ftiga.jpg">
        <img id="sliderImage4" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fempat.jpg">
        <img id="sliderImage5" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Flima.jpg">
        <img id="sliderImage6" src="https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/img1%2Fenam.jpg">
    </div>

    <div class="container">
        <h1><u>ITEMKU</u></h1>
        <p><b>ITEMKU</b>merupakan website yang dibuat untuk kalangan gamers. Website ini merupakan website yang digunakan para gamers untuk membeli
            item game dan sifatnya pihak ketiga , jadi selain bisa membeli item di dalam gamenya ,
            juga bisa melalui website ini.Website ini juga berguna untuk kalangan gamer yang ingin membeli dengan
            lebih banyak diskon dan promo daripada di gamenya , sehingga lebih murah dan terjangkau.
        </p>
    </div>
    <br><br><br>
</body>

</html>