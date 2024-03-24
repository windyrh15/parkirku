<?php 
require 'functions.php';

if (isset($_POST["submit"])) {
	
if (tambahIN($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil ditambah');
			document.location.href = 'IN.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal ditambah');
			document.location.href = 'tambahIN.php';
		</script>
	";
}

}

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>ParkirIN</title>
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
                    <li><a href="Laporan.php">Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <center>
                <h1>Parkir Masuk</h1>
            </center>   
            <br>
            <form action="" method="post" class="form-inline">
                <div class="form-group">
                    <label for="plate">Plat </label><br>
                    <input type="text" name="plate" id="plate" required autocomplete="off" class="form-control" autofocus>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="jnsken">Jenis kendaraan </label><br>
                    <select name="jnsken" id="jnsken" required autocomplete="off" class="form-control">
                        <option>Mobil</option>
                        <option>Motor</option>
                    </select>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="status">Status </label><br>
                    <select name="status" id="status" required autocomplete="off" class="form-control">
                        <option>Masuk</option>
                    </select>
                </div>
                <br><br>
                <button type="submit" name="submit" class="btn btn-success">TAMBAH DATA</button>
            </form>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="#">Copyright by INFOKOM BOGOR.</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Develop by Windy Riando Handoko, Axel bagaskarawijaya, and Puput Novianti</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
