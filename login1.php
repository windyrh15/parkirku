<?php 
session_start();
if( isset($_SESSION["login"])){
	header("location: index.php");
	exit;
}

require 'functions.php';

if(isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  //cek username 
  if( mysqli_num_rows($result) === 1 ) {

    //cek password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      //set session 
    	$_SESSION["login"] = true;

      header("location: index.php");
      exit;
    }
  }
  $error = true;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Parkirku</title>
	
</head>
<body>

	<h1>Login</h1>

<?php if ( isset($error)) : ?>
	<p style="color: red">usernam/password salah gan</p>
<?php endif; ?>

<form action="" method="post">
	
<ul>
	<li>
		<label for="username">username:</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">password:</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="login">Login</button>
	</li>
</ul>

</form>
</body>
</html> 