<?php 

require 'functions.php';

if(isset($_POST["register"])){

	if (registrasi($_POST)>0) {
		echo "<script>
				alert('user baru berhasil di tambah');
				document.location = 'login.php';
			</script>";
	} else{
		echo mysqli_error($conn);
	}
	
} 

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parkirku Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/avatar-02.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-34">
						Daftar
					</span>
				<form action="" method="post" onSubmit="alert('Submitted.');return false;">
	
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100" ></span>
						<input class="input100" type="text"  placeholder="Username" name="username" id="username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100"></span>
						<input class="input100" type="password"  placeholder="password" name="password" id="password" min="8"><span class="focus-input100" ></span>

						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100"></span>
						<input class="input100" type="password"  placeholder="Ketik ulang password" name="password2" id="password2" pattern="(?=^.{8,}$).*$">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register">
							Daftar
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Sudah memiliki akun?
						</span>

						<a href="login.php" class="txt2">
							Login
						</a>
					</div>

					</form>	
				</form>

				<div class="login100-more" style="background-image: url('css/a2r.png');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>