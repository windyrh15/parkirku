<?php 

require 'functions.php';
$jumlahData = query("SELECT * FROM msk");


require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Asia/Jakarta');
$mpdf = new \Mpdf\Mpdf();
$date = date('d-m-Y');
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Data kendaraan</title>

	</head>';
$html .='
<body>
	<body>
	<p align="center" width="100%" font-size="14px"><img src="images/infokom.jpg" width="105s" style="float:left;"/><img src="images/avatar-02.png" width="105s" style="float:right;"/>

	<br>
	<br>
	<b><font size ="6">LAPORAN DATA KENDARAAN</font>
	<b><br><font size ="5"> SMK INFORMATIKA DAN TELEKOMUNIKASI </font>
	<br><font size ="3">Jalan Letjend Ibrahim Adjie No. 178 Sindangbarang Bogor</p></font>
	<hr/>';


	
$html .='<br>Tanggal: '. $date .''; 
$html .= '<br><br>
	<div class="navbar-left">
	
</div>
	<table width="100%" border="1" cellspacing="0" cellpadding="4">

		<tr>
			<th><center>No</center></th>
			<th><center>Plat</center></th>
			<th><center>Jenis kendaraan</center></th>
			<th><center>Jam masuk</center></th>
			<th><center>Jam keluar</center></th>
			<th><center>Total</center></th>
			<th><center>Status</center></th>
		</tr>';

$i = 1;
$total1=0;
foreach ( $jumlahData as $row ) {
$total1 +=$row['total'];
$total2 =$i;

	$html .='<tr>  
		<td>'. $i++ .'</td>
		<td>'. $row["plate"] .'</td>
		<td>'. $row["jnsken"] .'</td>
		<td>'. $row["jmmsk"] .'</td>
		<td>'. $row["jmklr"] .'</td>
		<td> Rp.'.number_format ($row["total"]) .',-</td>
		<td>'. $row["status"].'</td>
	</tr>';
}


$html .='
<br>
	<tr>
		<td colspan="5"><b>Total Keseluruhan</b></td>
		<td colspan="5"><center><b>Rp.'.number_format ($total1) .',-</b></center></td>
		</tr>';
$html .='
	<tr>
		<td colspan="5"><b>Jumlah Data</b></td> 
		<td colspan="5"><center><b>'. $total2 .'</b></center></td>
	</tr></table>

</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Data-kendaraan.pdf',\Mpdf\Output\Destination::INLINE);

?>