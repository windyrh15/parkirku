<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$msk = query("SELECT * FROM msk ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $msk = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="icon" type="image/png" href="images/avatar-02.png"/>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Parkirku</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="parkir.php">Parkir</a></li>
                    <li><a href="IN.php">Data</a></li>
                    <li><a href="laporan.php">Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Selamat datang di aplikasi Parkirku</h1>
            <p>Hai admin!<br/>Aplikasi ini adalah pengembangan software parkir sejak awal tahun 2019, kami menyediakan software parkir modern sebagai solusi penerapan manajemen parkir yang terintegrasi. Aplikasi web parkir berbasis online.</p>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text navbar-left">Copyright by INFOKOM BOGOR.</p>
            <p class="navbar-text navbar-right">Develop by Windy Riando Handoko, Axel bagaskarawijaya, and Puput Novianti</p>
        </div>
    </nav>
</body>
</html>