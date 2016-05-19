<?php  
include "header.php";

$cekDataLah = mysql_query("SELECT * FROM data_jarak");
if (mysql_num_rows($cekDataLah) > 0) {
// 	$getData = mysql_fetch_assoc($cekDataLah);
// 	$n = 0;
// 	while ($getData = mysql_fetch_assoc($cekDataLah)) {
// 		$a = $getData['a'];
// 		$b = $getData['b'];
// 		$c = $getData['c'];
// 		$d = $getData['d'];
// 		$arrayBaru[] = array($a,array($b,$c,$d));
// 	}
// 	foreach ($arrayBaru as $key => $value) {
// 		if ($value[0] == array_unique($arrayBaru)) {
// 			$dd = $value;				
// 		}
// 	}
// 	echo "<pre>";
// 	print_r($arrayBaru);
// 	echo "</pre>";

// }
	$no='';
	$data=array();
	while ($row = mysql_fetch_assoc($cekDataLah)) {
		if($no!= $row['a']){
			$no=$row['a'];
			$data[$no]=array();
		}
		$data[$no][] = array($row['a'],$row['b'],$row['c'],$row['d']);
	}
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
else {
	echo "<h1>Tidak Ada Data Pada Database Yang Akan Di Proses.</h1>";
}


?>