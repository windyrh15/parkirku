<?php 
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
		<button type="submit" name="Login">Login</button>
	</li>
</ul>

</form>
</body>
</html>