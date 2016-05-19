<?php 
include 'config.php';
$nim=$_GET['nim'];
mysql_query("delete from mahasiswa where nim='$nim'");
header("location:mahasiswa.php");

?>