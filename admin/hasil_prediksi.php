<?php include 'header.php';  ?>
<div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> Hasil Prediksi</a>
			</div>
			
</div>
</div>	
</div>
<?php  
include 'config.php';

//if (isset($_POST["submit"])) {
	//$nim = $_POST["nim"];
	$query = mysql_query("SELECT * FROM mahasiswa_smst_empat WHERE NIM='$_SESSION[uname]'");
	$getData = mysql_fetch_assoc($query);
	
	//$jk = $_POST["Jenis_Kelamin"];
	//$tinggal = $_POST["Jenis_Tinggal"];
	//$umur = $_POST["Umur"];
	//$sks = $_POST["Jumlah_SKS"];
	//$nm = $_POST["Jumlah_NM"];
	//$ipk = $_POST["IPK"];
	$nim = $getData["NIM"];
	
	$jk = $getData["jk"];
	$tinggal = $getData["tinggal"];
	$umur = $getData["umur"];
	$sks = $getData["sks"];
	$nm = $getData["nm"];
	$ipk = $getData["ipk_sem_tiga"];
//------------------- Normalisasi Training Data Baru-------------------//
	switch ($jk) {
		case 'PRIA':$normalisasi_jk = 0;break;
		case 'PEREMPUAN':$normalisasi_jk = 1;break;
	}
	switch ($tinggal) {
		case 'KOST':$normalisasi_tinggal = 0;break;
		case 'ORANG TUA':$normalisasi_tinggal = 1;break;
		case 'WALI':$normalisasi_tinggal = 2;break;
	}

	if ($umur > 22) {
		$normalisasi_umur = 2;
	} elseif ($umur == 22) {
		$normalisasi_umur = 1;
	} elseif ($umur < 22) {
		$normalisasi_umur = 0;
	}

	if ($sks > 81) {
		$normalisasi_sks = 2;
	}elseif ($sks == 81 ) {
		$normalisasi_sks = 1;
	}elseif ($sks < 81) {
		$normalisasi_sks = 0;
	}

	if ($nm == 200) {
		$normalisasi_nm = 1;
	}elseif ($nm < 200) {
		$normalisasi_nm = 0;
	}if ($nm > 200) {
		$normalisasi_nm = 2;
	}

	$array_norm = array($normalisasi_jk,$normalisasi_umur,$normalisasi_sks,$normalisasi_tinggal,$normalisasi_nm);
	// echo "<pre>";
	// print_r($array_norm);
	// echo "</pre>";
//------------------- Normalisasi Testing Data-------------------//
	$q = mysql_query("SELECT * FROM mahasiswa ORDER BY `nim` ASC");
	// $p = mysql_query("SELECT COUNT(*) FROM mahasiswa");
	$n = 1;
	while ($get = mysql_fetch_array($q)) {
		$dataTraining = array($get["Jenis_Kelamin"],$get["Jenis_Tinggal"],$get["Umur"],$get["Jumlah_SKS"],$get["Jumlah_NM"]);
		switch ($dataTraining[0]) {
			case 'PRIA':$normalisasi_jk_dt = 0;break;
			case 'PEREMPUAN':$normalisasi_jk_dt = 1;break;
		}
		switch ($dataTraining[1]) {
			case 'KOST':$normalisasi_tinggal_dt = 0;break;
			case 'ORANG TUA':$normalisasi_tinggal_dt = 1;break;
			case 'WALI':$normalisasi_tinggal_dt = 2;break;
		}
		if ($dataTraining[2] > 22) {
			$normalisasi_umur_dt = 2;
		} elseif ($dataTraining[2] == 22) {
			$normalisasi_umur_dt = 1;
		} elseif ($dataTraining[2] < 22) {
			$normalisasi_umur_dt = 0;
		}

		if ($dataTraining[3] > 81) {
			$normalisasi_sks_dt = 2;
		}elseif ($dataTraining[3] == 81 ) {
			$normalisasi_sks_dt = 1;
		}elseif ($dataTraining[3] < 81) {
			$normalisasi_sks_dt = 0;
		}		

		if ($dataTraining[4] == 200) {
			$normalisasi_nm_dt = 1;
		}elseif ($dataTraining[4] < 200) {
			$normalisasi_nm_dt = 0;
		}elseif ($dataTraining[4] > 200) {
			$normalisasi_nm_dt = 2;
		}
		
		$normalisasi_dataTraining = array($get["nim"],$normalisasi_jk_dt,$normalisasi_umur_dt,$normalisasi_sks_dt,$normalisasi_tinggal_dt,$normalisasi_nm_dt);

		$array_hasil_norm =  sqrt(bcpow(($array_norm[0] - $normalisasi_dataTraining[1]),2)+bcpow(($array_norm[1] - $normalisasi_dataTraining[2]),2)+bcpow(($array_norm[2] - $normalisasi_dataTraining[3]),2)+bcpow(($array_norm[3] - $normalisasi_dataTraining[4]),2)+bcpow(($array_norm[4] - $normalisasi_dataTraining[5]),2));		
		
		$hasil[] = array("Nilai" => $array_hasil_norm , "NIM" => $get["nim"]);
	}	
	sort($hasil);
	 //echo "<pre>";
	 	//print_r($hasil);
	 //echo "</pre>";
	//Hasil pengurutan OK
 //------------------- Mengambil data terpendek dengan K= 5 -------------------//
	if ($ipk >= 3.50 && $ipk <= 4.00) {
		$nilaiIPK = "Pujian";
	}
	elseif ($ipk >= 3.00 && $ipk <= 3.49) {
		$nilaiIPK = "Sangat Memuaskan";
	}
	elseif ($ipk >= 2.50 && $ipk <= 2.99) {
		$nilaiIPK = "Memuaskan";
	}
	elseif ($ipk >= 2.00 && $ipk <= 2.49) {
		$nilaiIPK = "Cukup";
	}

	$konstanta = 5;
	$i = 1;
	$awal = 0;

	foreach ($hasil as $key => $value) {
		if ($awal < $konstanta) {
			$implode = implode(" ",$value);
			$explode = explode(" " , $implode);
			// echo "<pre>";
			// echo substr($implode , 0 ,5);
			// print_r($explode[1]);
			// echo "</pre>";
			$x = mysql_query("SELECT * FROM mahasiswa WHERE nim='$explode[1]'");
			if ($data = mysql_fetch_assoc($x)) {
				// echo $data["Nilai"]."<br>";
				// $end = array($explode[1] , substr($explode[0],0,5),$data["Nilai"]);
				$end[] = array($data["Nilai"]);
			}
		$awal++;
		}		
	}
	
	foreach ($end as $k => $v) {
		for ($i=0; $i <= $k[6]; $i++) { 
			$t[] = $v[0];
		}
	}
	$countT = count($t);

	foreach ($t as $data) {
		if ($data == $nilaiIPK) {
			$point = 1;
		}
		else {
			$point = 0;
		}
		if ($point == 1) {
			$newPoint[] = array($point);
		}
	}
		$hit = count($newPoint);
		 //echo "<pre>";
		 //print_r($hit);
		 //echo "</pre>";

//Hitung
		$x = ($hit / $countT)*100;
		///End Hitung

	// echo "<pre>";
	// print_r($t);
	// echo "</pre>";

	$new = array_count_values($t);
	arsort($new);
	// print_r($new);
	$akhir = 1;
	$awalLagi = 0;


	foreach ($new as $key => $value) {
		if ($awalLagi < $akhir) {
			


	?>
			<form action="" method="POST">
			<table class="table">
			<tr>
				<td>NIM</td>
				<td><input type="text" class="form-control" name="IN_NIM" value="<?php echo $nim; ?>" disabled></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" class="form-control" name="IN_JK" value="<?php echo $jk;  ?>" disabled></td>
			</tr>
			<tr>
				<td>Jenis Tinggal</td>
				<td><input type="text" class="form-control" name="IN_TINGGAL" value="<?php echo $tinggal;  ?>" disabled></td>	
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" class="form-control" name="IN_UMUR" value="<?php echo $umur;  ?>" disabled></td>
			</tr>
			<tr>
				<td>Jumlah SKS</td>
				<td><input type="text" class="form-control" name="Jumlah_SKS" disabled value="<?php echo $sks; ?>"></td>
			</tr>
			<tr>
				<td>Jumlah NM</td>
				<td><input class="form-control" name="IN_HASIL" value="<?php echo $nm; ?>" disabled></td>
			</tr>
			<tr>
				<td>Nilai IPK Mendekati</td>
				<td><input class="form-control" name="IN_HASIL" value="<?php echo $ipk; ?>" disabled></td>
			</tr>
			<tr>
				<td>Prediksi Predikat Semester Empat</td>
	 			<td><input type="text" class="form-control" name="" value="<?php echo $key; ?>" disabled></td>
			</tr>
			<!--<tr>
				<td>Ketepatan Prediksi Dalam Persen</td>
	 			<td><input type="text" class="form-control" name="" value="<?php echo round($x,2)." %"; ?> " disabled></td>
			</tr>--!>
			</table>
			<div class="col-md-6">
				<div>
					<input class="btn btn-success" type="submit" name="SAVE" value="Simpan"/>
					<a class="btn btn-warning" href="index.php">Batal</a>
				</div>
			</div>
			</form>
		<?php
			// echo $key;
			$awalLagi++;

		}

	}
//}	
?>	
