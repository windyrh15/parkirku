<?php 

 
function rupiah($angka){
	
	$hasil = "Rp " . number_format($angka,2,',','.');
	return $hasil;
 
}
 
echo rupiah(1000000);
?>