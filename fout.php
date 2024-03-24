<?php  
$conn = mysqli_connect("localhost", "root", "", "phpdasar");



function ParkirOUT2($data){

	global $conn;

	$id = $data["id"];
	$plate = htmlspecialchars($data["plate"]);
	$jnsken = htmlspecialchars($data["jnsken"]);
	$jmmsk = htmlspecialchars($data["jmmsk"]);
	$jmklr = date("Y-m-d H:i:s");

	$query = "UPDATE msk INSERT INTO klr
	plate = '$plate',
	jnsken = '$jnsken',
	jmmsk = '$jmmsk'
	WHERE id = $id ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}