<?php
include "functions.php";
$msk = $_POST['msk'];
$jmmsk = date("Y-m-d H:i:s");

$sql = "INSERT INTO jmmsk_auto VALUES('','$msk','$jmmsk')";
mysqli_query($conn,$sql);

header('location:jmmsk.php?sukses');
?>