<?php 
include 'config.php';
$nim=$_POST['nim'];
$kelamin=$_POST['Jenis_Kelamin'];
$tinggal=$_POST['Jenis_Tinggal'];
$umur=$_POST['Umur'];
$nm=$_POST['Jumlah_NM'];
$sks=$_POST['Jumlah_SKS'];
$ipk=$_POST['IPK'];
$nilai=$_POST['Nilai'];
mysql_query("insert into mahasiswa values('$nim','$kelamin','$tinggal','$umur','$nm','$SKS','$ipk','$nilai')");
header("location:mahasiswa.php");

 ?>