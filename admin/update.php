<?php 
include 'config.php';
$nim=$_POST['nim'];
$kelamin=$_POST['Jenis_Kelamin'];
$tinggal=$_POST['Jenis_Tinggal'];
$umur=$_POST['Umur'];
$sks=$_POST['Jumlah_SKS'];
$nm=$_POST['Jumlah_NM'];
$ipk=$_POST['IPK'];
$nilai=$_POST['Nilai'];
mysql_query("update mahasiswa set nim='$nim' , Jenis_Kelamin='$kelamin', Jenis_Tinggal='$tinggal', Umur='$umur' , Jumlah_SKS='$sks',Jumlah_NM='$nm',IPK='$ipk', Nilai='$nilai' where nim='$nim'");
header("location:mahasiswa.php");

?>