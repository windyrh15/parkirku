  <?php 
require 'functions.php';

$jumlahDataPerHalaman = 10;
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
	<style>
		@media print{
			.title{
				display: none;
			}
			.tambah{
				display: none;
			}
			.Laporan{
				display: none;
			}
		}
	</style>
	<title class="title">Data kendaraan</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">	
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/tests/vendor/jquery.min.js"></script>
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
			<a class="navbar-brand" href="">Parkirku</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav		">				
				<li class="tab-pane"><a href="index.php">Beranda</a></li>
				<li class="tab-pane"><a href="parkir.php">Parkir</a></li>
				<li class="tab-pane"><a href="IN.php">Data</a></li>  
				<li class="tab-pane"><a href="Laporan.php">Laporan</a></li>

				<form class="navbar-form navbar-left" role="search" action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Cari"name="keyword" size="25"autocomplete="off">
				</div>
				<button type="submit" class="btn btn-default"name="cari" ><span class="glyphicon glyphicon-search"></span></button> 

				<form action="IN.php" method="post"> 
			<div class="form-group">
			<button type="submit" class="btn btn-default"name="all">Semua</button>
			
			</form>
			</form>


			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
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
<div class="navbar-left">
	<b>Tanggal: <?php echo date('d-m-Y'); ?></b>
</div>
<center>
	<h1>Data kendaraan</h1>

<div class="navbar-left">
	<a href="parkir.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span></a> 
	<a href="Laporan.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-print"></span></a> 
	
</div>

	<br><br>

	
	<?php  if ($halamanAktif > 1 ) : ?>
		<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
	<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
	<?php if($i == $halamanAktif) : ?>
	<a href="?halaman=<?= $i; ?>"style="font-weight:bold; color: green"><?= $i; ?></a>
	<?php else : ?>
		<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

	<?php  if ($halamanAktif < $jumlahHalaman ) : ?>
		<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
	<?php endif; ?>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
		<tr>
			<th><center>No</center></th>
			<th><center>Plat</center></th>
			<th><center>Jenis kendaraan</center></th>
			<th><center>Jam masuk</center></th>
			<th><center>Jam keluar</center></th>
			<th><center>Total</center></th>
			<th><center>Status</center></th>
			<th><center>Aksi</center></th>
		
</thead>
		<?php $c = 1;  ?>
		<?php $total1=0; ?>
		<?php foreach ( $msk as $row): {
		
		$total1 +=$row['total'];
		$jumlah = $c;
		} ?>


		<td><?= $c ?></td>
			<td><?= $row["plate"];?></td>
			<td><?= $row["jnsken"];?></td>
			<td><?= $row["jmmsk"];?></td>
			<td><?= $row["jmklr"];?></td>
			<td>Rp.<?= number_format ($row["total"]);?>,-</td>
			<td><?= $row["status"];?></td>
			<td>
				<center>
			<a href="ubah.php?id=<?= $row["id"];?> "class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="hapus.php?id=<?= $row["id"];?>"class="btn btn-danger btn-sm"  onClick="return confirm('Yakin akan Hapus Data?')"><span class="glyphicon glyphicon-trash"></span></a>
			<a href="keluar.php?id=<?= $row["id"];?>"class="btn btn-info btn-sm"><span class="glyphicon glyphicon-arrow-right"></span></a>
				</center>
		</td>
		</tr>
		

		<?php $c++;  ?>
	<?php endforeach; ?>
	<br>
<tr>
	<th colspan="5">Total Keseluruhan:</th>
	<td colspan="2"><center>Rp.<?= number_format ($total1) ?>,-</center></td>
</tr>
<tr>
	<th colspan="5">Jumlah Data:</th>
	<td colspan="2"><center><?= $jumlah ?></center></td>
</tr>


</table>
	<br><br>
</center>
</center>		
		</div>
	</nav>
	<br>
</div>
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