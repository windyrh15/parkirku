  <?php 
require 'functions.php';
$msk = query("SELECT * FROM klr ORDER BY id DESC");

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
	<title>Halaman OUT</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">	
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	
</head>
<body>
	<center>
	
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
				<li class="tab-pane"><a href="index.php">Home</a></li>
				<li class="tab-pane"><a href="parkir.php">Parkir</a></li>
				<li class="tab-pane"><a href="IN.php">IN</a></li> 
				<li class="tab-pane"><a href="#">OUT</a></li> 
				<li class="tab-pane"><a href="#">Report</a></li>

				<form class="navbar-form navbar-left" role="search" action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search"name="keyword" size="25"autocomplete="off">
				</div>
				<button type="submit" class="btn btn-default"name="cari">Search</button>

				<form action="IN.php" method="post"> 
			<div class="form-group">
			<button type="submit" class="btn btn-default"name="all">ALL</button>
			
			</form>
			</form>


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
<br><br>
<div class="container">
		<div class="jumbotron">

	<h1>EDIT</h1>

	<form action="" method="post" class="form-inline">
	<input type="hidden" name="id" value="<?= $pr["id"];?>">
	<ul>
		
			<div class="form-group">
			<label for="plate">plate:</label>
			<input type="text" name="plate" id="plate"
			required value="<?= $pr["plate"];?>" autocomplete="off" class="form-control">
		</div>
		
			<div class="form-group">
			<label for="jnsken">jenis kendaraan:</label>
			<select name="jnsken" id="jnsken" required value="<?= $pr["jnsken"];?>" autocomplete="off" class="form-control">
				<option>mobil</option>
				<option>motor</option>
			</select>
		</div>
		<br>
		<br>

		<div class="container-fluid">
			<button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
		</div>
	</ul>
	

</body>
</html>