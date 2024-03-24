   <?php 
require 'functions.php';
$msk = query("SELECT * FROM msk ORDER BY id DESC");

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
	<title>Halaman IN</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">	
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	
</head>
<body>
	
	
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
	
			<a class="navbar-brand" href="">Parkirku</a>
		</div>
		<div class="tab-content" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li class="tab-pane "><a href="index.php">Home</a></li>
				<li class="tab-pane"><a href="parkir.php">Parkir</a></li>
				<li class="tab-pane"><a href="IN.php">IN</a></li> 
				<li class="tab-pane"><a href="#">OUT</a></li> 
				<li class="tab-pane"><a href="#">Report</a></li> 
			
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">

				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
<br>
<br>
<div class="container">
		<div class="jumbotron">
			<h1>Selamat datang di aplikasi parkirku</h1> 
			<p>
				Hai admin!. <br/>
				Aplikasi ini adalah pengembangan software parkir sejak awal tahun 2019, Kami menyediakan software parkir modern sebagai solusi penerapan manajemen parkir yang terintegrasi.  <br/>
				Aplikasi web parkir berbasis online.			
			</p> 
		</div>
		
	</div>
	<br>
		<br>
	<br>
		<br>
	<br>
		<br><br>
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ 2015 Malas Ngoding. All rights reserved.</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by www.malasngoding.com</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
	
</body>
</html>