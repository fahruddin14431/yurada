<?php
$id_pemabayaran = $_GET['id_pemabayaran'];
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "db_olshop_yurada";
 
$conn = mysql_connect($host, $user, $pass);
if ($conn) {
	$open = mysql_select_db($dbnm);
	if (!$open) {
		die ("Database tidak dapat dibuka karena ".mysql_error());
	}
} else {
	die ("Server MySQL tidak terhubung karena ".mysql_error());
}
//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT id_pembayaran, id_pesan, total_transaksi, no_resi, bukti_pembayaran FROM tb_pembayaran WHERE id_pembayaran = '$id_pembayaran'  ORDER BY id_pesan ";
$sql = mysql_query ($query);
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
	array_push($data, $row);
}
 
#setting judul laporan dan header tabel
$judul = "LAPORAN PEMBAYARAN PELANGGAN";
$header = array(
		array("label"=>"ID Pembayaran", "length"=>30, "align"=>"L"),
		array("label"=>"ID Pesan", "length"=>30, "align"=>"L"),
		array("label"=>"Total Transaksi", "length"=>55, "align"=>"L"),
		array("label"=>"No Resi", "length"=>30, "align"=>"L"),
		array("label"=>"Bukti Pembayaran", "length"=>50, "align"=>"L")
	);
 
#sertakan library FPDF dan bentuk objek
require_once ("/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output();
?>