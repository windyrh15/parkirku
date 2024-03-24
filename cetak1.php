  <?php 
require 'functions.php';

$jumlahDataPerHalaman = 20;
$jumlahData = count(query("SELECT * FROM msk"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$msk = query("SELECT * FROM msk LIMIT $awalData,$jumlahDataPerHalaman");

if(isset($_POST["cari"])) {
	$msk = cari($_POST["keyword"]);
}

// 	while ($msk = mysqli_fetch_assoc($result)) {
// 		var_dump($msk);
// }

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data kendaraan</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">	
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	<link rel="icon" type="image/png" href="images/avatar-02.png"/>
	
</head>
<body>
 



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
	<center>		
	<h1>Data kendaraan</h1>
	</center>
	
<div class="navbar-left">
	
</div>
	<br><br>

	
	
<table class="table table-bordered table-striped">
<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Plat</center></th>
			<th><center>Jenis kendaraan</center></th>
			<th><center>Jam masuk</center></th>
			<th><center>Jam keluar</center></th>
			<th><center>Total</center></th>
		</tr>
</thead>
		<?php $c = 1;  ?>
		<?php foreach ( $msk as $row): {
		
		} ?>
		
		<tr>
		<td><?= $c ?></td>
			<td><?= $row["plate"];?></td>
			<td><?= $row["jnsken"];?></td>
			<td><?= $row["jmmsk"];?></td>
			<td><?= $row["jmklr"];?></td>
			<td><?= $row["total"];?></td>
		</tr>
		<?php $c++;  ?>
	<?php endforeach; ?>
</table>
	
</center>
<br><br>
	<br><br>
<br><br>
	<br><br>
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
	<script>
		window.print();
	</script>
	

</body>
</html>