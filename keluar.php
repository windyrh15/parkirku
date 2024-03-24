<?php 
session_start();

date_default_timezone_set('Asia/Jakarta');
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");

	exit;
}
require 'functions.php';

$id = $_GET["id"];
$pr = query("SELECT * FROM msk WHERE id=$id")[0];


if (isset($_POST["submit"])) {

	
if (keluar($_POST) > 0 ) {
	echo "
		<script>
			alert('Kendaraan berhasil keluar');
			document.location.href = 'IN.php';
		</script>
	";
} else {
	echo "
		<script>
			alert(Kendaraan gagal keluar');
			document.location.href = '';
		</script>
	";
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Parkir Keluar</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<link rel="icon" type="image/png" href="images/avatar-02.png"/>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">	
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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
			<a class="navbar-brand" href="">Parkirku</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li class="tab-pane"><a href="index.php">Beranda</a></li>
				<li class="tab-pane"><a href="parkir.php">Parkir</a></li>
				<li class="tab-pane"><a href="IN.php">Data</a></li> 
				<li class="tab-pane"><a href="laporan.php">Laporan</a></li> 
				<li class="dropdown">

			</ul>
			<ul class="nav navbar-nav navbar-right">

				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out	"></span> Keluar</a></li>
			</ul>
	
		
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
 
 
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
<br><br>
 <div class="container">
	<div class="jumbotron">
	<h1>Kendaraan Keluar</h1>

	<form action="" method="post" class="form-inline">
	<input type="hidden" name="id" value="<?= $pr["id"];?>">
	<ul>
		
			<div class="form-group">
			<label for="plate">Plat </label><br>
			<input type="text" name="plate" id="plate"
			required value="<?= $pr["plate"];?>" autocomplete="off" class="form-control">
		</div>
		<br>
	</br>
		
			<div class="form-group">
			<label for="jnsken">Jenis kendaraan </label><br>
			<input type="text" name="jnsken" id="jnsken"
			required value="<?= $pr["jnsken"];?>" autocomplete="off" class="form-control">
			</select>
		</div><br><br>
		<div class="form-group">
			<label for="jmmsk">Jam masuk</label><br>
			<input type="text" name="jmmsk" id="jmmsk"
			required value="<?= $pr["jmmsk"];?>" autocomplete="off" class="form-control"></div>
		<br><br>

		<label autocomplete="off" class="form-control"><?php echo date('Y-m-d H:i:s') ?></label><br><br>

		<div class="form-group">
	
	<label for ="nama"> Harga </label><br>
	<select name="motor" id="harga" class="form-control">
		<option>1500</option>
		<option>3000</option>
	</select>


	<label for="jampar">Jam parkir</label>
			<input type="text" name="jampar" id="jampar"class="form-control" autocomplete="off" class="form-control" autofocus="on">
	<label for ="total">Total </label>
	<input type="text" name="total" id="total" class="form-control">
	</div>
	<br>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type ="text/javascript">
		$(".form-group").keyup(function(){

			var harga = parseInt($("#harga").val())
			var jampar = parseInt($("#jampar").val())
			var denda = parseInt($("#denda").val())
			var total = harga * jampar ;
			$("#total").attr("value",total)
			
			});
	</script>
	<br><br>
		<div class="form-group">
			<label for="status">Status </label><br>
			<select type="text" name="status" id="status"
			required value="<?= $pr["status"];?>" autocomplete="off" class="form-control"><option>Keluar</option></select>
		</div>
		<br>
		<br>
<div class="">
			<button type="submit" name="submit" class="btn btn-success">BAYAR</button>
			<a href="IN.php" class="btn btn-info btn-md">BATAL</a>
		</div>
		

	</ul>
	</form>
		</div>

			</center>		
		</div>
	</nav>
	<br><br><br>
	<br>
		<br>
			<br>
		<br>
		<br>
		<br>
			<br>
			<br>
<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright by INFOKOM BOGOR.</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by Windy Riando Handoko, Axel bagaskarawijaya, and Puput Novianti</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
</body>
</html>