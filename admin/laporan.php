<?php
include 'config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',18);
$pdf->Image('../logo/datamining.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(18.5,0.6,'EARLY WARNING SYSTEM',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(18.5,0.5,'Algoritma K-Nearest Neighbor',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(14.5,0.5,'Fakultas Sains dan Teknologi',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jurusan Sistem Informasi',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Mahasiswa",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'NIM', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Kelamin',1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Tinggal', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Umur',1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah SKS', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah NM', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'IPK', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Predikat', 1, 1, 'C');

$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from mahasiswa");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['nim'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Jenis_Kelamin'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Jenis_Tinggal'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['Umur'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Jumlah_SKS'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['Jumlah_NM'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['IPK'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['Nilai'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan.pdf","I");

?>

