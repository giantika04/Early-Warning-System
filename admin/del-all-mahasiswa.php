<?php
include 'config.php';
mysql_query("TRUNCATE TABLE mahasiswa");
header("location:mahasiswa.php");
?>