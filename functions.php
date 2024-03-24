<?php  
$conn = mysqli_connect("localhost", "root", "", "parkirku");


function query($query){
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}
return $rows;
}

function tambahIN($data){
	global $conn;
	date_default_timezone_set('Asia/Jakarta');
	$plate = htmlspecialchars($data["plate"]);
	$jnsken = htmlspecialchars($data["jnsken"]);
	$jmmsk =  date("Y-m-d H:i:s");
	$status =  htmlspecialchars($data["status"]);
 
	$query = "INSERT INTO msk(id, plate, jnsken, jmmsk, status) VALUES ('', '$plate', '$jnsken', '$jmmsk','$status	')"; 
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function keluar($data){
	global $conn;
	
	date_default_timezone_set('Asia/Jakarta');
	$id = $data["id"];
	$plate = htmlspecialchars($data["plate"]);
	$jnsken = htmlspecialchars($data["jnsken"]);
	$jmklr =  date("Y-m-d H:i:s");
	$total =  htmlspecialchars($data["total"]);
	$status =  htmlspecialchars($data["status"]);

	$query = "UPDATE msk SET
	plate = '$plate',
	jnsken = '$jnsken',
	jmklr = '$jmklr',
	total = '$total',
	status = '$status'

	WHERE id = $id ";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM msk WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function ubah($data){
	global $conn;
date_default_timezone_set('Asia/Jakarta');
	$id = $data["id"];
	$plate = htmlspecialchars($data["plate"]);
	$jnsken = htmlspecialchars($data["jnsken"]);
	$jmklr = date("Y-m-d H:i:s");
	

	$query = "UPDATE msk SET
	plate = '$plate',
	jnsken = '$jnsken'
	WHERE id = $id ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



	function cari($keyword){
		$query = "SELECT * FROM msk 
					WHERE
					plate LIKE '%$keyword%'OR
					jnsken LIKE '%$keyword%'
					";
		return query($query);
	}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	


	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if ( mysqli_fetch_assoc($result)) {

		echo "<script>
				alert('username yang dipilih sudah terdaftar!');
				</script>";
		return false;
	}
 
	if ($password !== $password2) {

		echo "<script>
				alert('konfirmasi password tidak sesuai!');
				</script>";
		
		return false;
	}


	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);

function parkirOUT2($data){
	global $conn;

	$plate = htmlspecialchars($data["plate"]);
	$jnsken = htmlspecialchars($data["jnsken"]);
	$jmmsk = date("Y-m-d H:i:s");
 
	$query = "SELECT * FROM msk INSERT INTO klr ('', '$plate', '$jnsken', '$jmmsk', '$jmklr')";
	$query = "UPDATE msk SET
	plate = '$plate',
	jnsken = '$jnsken'
	jmmsk = '$jmmsk'
	WHERE id = $id ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

}


?>