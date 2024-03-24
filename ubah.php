<?php 

session_start();

if( !isset($_SESSION["login"]) ){
	header("Location: login.php");

	exit;
}

require 'functions.php';

$id = $_GET["id"];
$pr = query("SELECT * FROM msk WHERE id=$id")[0];


if (isset($_POST["submit"])) {
	
if (ubah($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil diubah');
			document.location.href = 'IN.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal diubah');
			document.location.href = '';
		</script>
	";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkirIN</title>
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">   
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
                    <li class="tab-pane"><a href="index.php">Beranda</a></li>
                    <li class="tab-pane"><a href="parkir.php">Parkir</a></li>
                    <li class="tab-pane"><a href="IN.php">Data</a></li>
                    <li class="tab-pane"><a href="laporan.php">Laporan</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
 
    <div class="container">
        <div class="jumbotron">
            <h1>Ubah Kendaraan</h1>
            <form action="" method="post" class="form-inline">
                <input type="hidden" name="id" value="<?= $pr["id"];?>">
                <div class="form-group">
                    <label for="plate">Plat</label>
                    <input type="text" name="plate" id="plate" required value="<?= $pr["plate"];?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jnsken">Jenis kendaraan</label>
                    <select name="jnsken" id="jnsken" required class="form-control">
                        <option <?= ($pr["jnsken"] == 'Mobil') ? 'selected' : ''; ?>>Mobil</option>
                        <option <?= ($pr["jnsken"] == 'Motor') ? 'selected' : ''; ?>>Motor</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-success">UBAH</button>
                <a href="IN.php" class="btn btn-info">BATAL</a>
            </form>
        </div>    
    </div>

    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">    
            <p class="navbar-text">Copyright by INFOKOM BOGOR.</p>
            <p class="navbar-text navbar-right">Develop by Windy Riando Handoko, Axel bagaskarawijaya, and Puput Novianti</p>
        </div>
    </footer>
    
    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>
