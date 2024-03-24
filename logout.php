<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();


 ?>
 <script>
	alert('terimakasih telah menggunakan aplikasi ini.');
	document.location = 'login.php';
</script>