<!-- <form action="" method="POST"> -->

<div class="col-md-12">
  <table class="table table-striped table-hover table-bordered ">
      <thead >
        <th width="5%" style="text-align:center">No</th>
        <th width="12%" style="text-align:center">Nim</th>
        <th width="12%" style="text-align:center">Jenis Kelamin</th>
        <th width="10%" style="text-align:center">Jenis Tinggal</th>
        <th width="7%" style="text-align:center">Umur</th>
        <th width="7%" style="text-align:center">SKS</th>
        <th width="10%" style="text-align:center">NM</th>
        <th width="10%" style="text-align:center">IPK</th>
        <th style="text-align:center">Prediksi</th>
      </thead>
      <tbody>
<?php
include "header.php";
include "excel_reader2.php";

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;
$nom = 1;
// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=1; $i<=$baris; $i++) {
  // membaca data nim (kolom ke-1 sampai 6)
  $nim = $data->val($i, 1);
  $jk = $data->val($i, 2);
  $tinggal = $data->val($i, 3);
  $umur = $data->val($i, 4);
  $sks = $data->val($i, 5);
  $nm = $data->val($i, 6);  
  $ipk = $data->val($i,7);
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
  $array_data[] = array($nim,$jk,$tinggal,$umur,$sks,$nm,$ipk);
  $array_norm[] = array($nim,$normalisasi_jk,$normalisasi_tinggal,$normalisasi_umur,$normalisasi_sks,$normalisasi_nm);
  }

  $q = mysql_query("SELECT * FROM mahasiswa ORDER BY `nim` ASC");
  $row = mysql_num_rows($q);
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
    
    $normalisasi_dataTraining[] = array($get["nim"],$normalisasi_jk_dt,$normalisasi_tinggal_dt,$normalisasi_umur_dt,$normalisasi_sks_dt,$normalisasi_nm_dt);
  } 

// DATA NORMALISASI UNTUK DATA TESTING
  echo "<pre>";
  print_r($array_norm);
  echo "</pre>";
// END DATA NORMALISASI UNTUK DATA TESTING

// DATA NORMALISASI UNTUK DATA TRAINING
    echo "<pre>";
    print_r($normalisasi_dataTraining);
    echo "</pre>";   
// END DATA NORMALISASI UNTUK DATA TRAINING

//MENGHITUNG JARAK 
  for ($i=0; $i < count($array_norm); $i++) { 
        for ($j=0; $j < count($normalisasi_dataTraining); $j++) { 
          $array_hasil_norm =  sqrt(bcpow(($array_norm[$i][1] - $normalisasi_dataTraining[$j][1]),2)
            +bcpow(($array_norm[$i][2] - $normalisasi_dataTraining[$j][2]),2)
            +bcpow(($array_norm[$i][3] - $normalisasi_dataTraining[$j][3]),2)
            +bcpow(($array_norm[$i][4] - $normalisasi_dataTraining[$j][4]),2)
            +bcpow(($array_norm[$i][5] - $normalisasi_dataTraining[$j][5]),2)); 
          $arraySatu = array($i ,$array_norm[$i][0] ,$normalisasi_dataTraining[$j][0] , $array_hasil_norm);
          $end[] = array($arraySatu[0] , $arraySatu[1] , $arraySatu[2] , $arraySatu[3]);
        }
      } 
//END MENGHITUNG JARAK

//Data terurut --------------------------------------

//URUTKAN ARRAY DARI TERKECIL KETERBESAR
  $n=0;
  $awal = 0;
  $k = 5;
  $data=array();
  foreach ($end as $key => $value) {
    // echo $value[0];
    if($n!= $value[0]){
      $n=$value[0];
      $data[$n]=array();
    }
    $data[$n][] = array($value[3],$value[0],$value[1],$value[2]);
    sort($data[$n]);

  }
//CETAK YANG TERURUT SEMUA
    echo "<pre>";
    print_r($data);
    echo "</pre>";
//END CETAK YANG TERURUT SEMUA

//END URUTKAN ARRAY DARI TERKECIL KETERBESAR

//AMBIL 5 ARRAY TERKECIL 
    $array_slice = array();
    foreach ($data as $value) {
      $array_slice[] = array_slice($value,0,5);
    }
//CETAK
    echo "<pre>";
    print_r($array_slice);
    echo "</pre>";

//END AMBIL 5 ARRAY TERKECIL

//TEST IMPLODE
    // foreach ($array_slice as $key => $dataValue) {
    //   for ($i=0; $i < $k; $i++) { 
    //     $implode[$key][] = implode(',', $dataValue[$i]); 
    //   }
    // }
        // echo "<pre>";
        // print_r($implode);
        // echo "</pre>";       
//END TEST IMPLODE

//CEK NILAI DENGAN DATABASE
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

    foreach ($array_slice as $key => $value) {
      for ($i=0; $i < $k; $i++) { 
          $x = mysql_query("SELECT * FROM mahasiswa WHERE nim='".$value[$i][3]."'");
          if ($data = mysql_fetch_assoc($x)) {
            $akhirnya[$key][] = array($value[$i][3],$data["Nilai"]);
            // echo $value[$i][3]."-".$data["Nilai"]."<br>";    
          }
      }
    }
//CETAK
    //echo "<pre>";
    //print_r($akhirnya);
    //echo "</pre>";

//END CEK NILAI DENGAN DATA BASE

//HITUNG NILAI YANG TINGGI

    foreach ($akhirnya as $key => $value) {
      for ($i=0; $i < $k; $i++) { 
        $akhirnya2[$key][] = $value[$i][1];
        $countT[$key] = array_count_values($akhirnya2[$key]);
        arsort($countT[$key]);
        
      }
    }
//CETAK
    //echo "<pre>";
    //print_r($countT);
    //echo "</pre>";
    
    foreach ($countT as $key => $value) {
        $a = array_shift(array_slice($value,0,1));
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";    
        $cari[] = array_search($a, $value);
    }
    $Alhamdulillah = array($cari);
//CETAK
    //echo "<pre>";
    //print_r($Alhamdulillah);
    //echo "</pre>";

//END HITUNG NILAI TERTINGGI
    $number = 1;
    $awal = 0;
    foreach ($array_data as $key => $value) {
        $dataAwal = implode(',',$value);
        $explode[] = explode(',',$dataAwal);
        echo "
        <tr>
          <td align='center'>".$number++."</td>
          <td align='center'>".$explode[$key][0]."</td>
          <td align='center'>".$explode[$key][1]."</td>
          <td align='center'>".$explode[$key][2]."</td>
          <td align='center'>".$explode[$key][3]."</td>
          <td align='center'>".$explode[$key][4]."</td>
          <td align='center'>".$explode[$key][5]."</td>
          <td align='center'>".substr($explode[$key][6],0,5)."</td>
          <td align='center'>".$Alhamdulillah[0][$key]."</td>
        </tr>
        ";      
    }

  echo "</table>
  </div>
  ";
?>
