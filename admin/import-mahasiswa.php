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

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
  // membaca data nim (kolom ke-1 sampai 7)

  $nim = $data->val($i, 1);
  $kelamin = $data->val($i, 2);
  $tinggal = $data->val($i, 3);
  $umur = $data->val($i, 4);
  $sks = $data->val($i, 6);
  $nm = $data->val($i, 5);
  $ipk = $data->val($i, 7);
  $nilai = $data->val($i, 8);
  // setelah data dibaca, sisipkan ke dalam tabel training
  $query = "INSERT INTO mahasiswa VALUES ('$nim','$kelamin','$tinggal','$umur','$sks','$nm','$ipk','$nilai')";
  $hasil = mysql_query($query);

  if ($hasil) $sukses++;
  else $gagal++;
}

// tampilan status sukses dan gagal
echo "<center style='margin-top:10%; padding-bottom:14%;'><h3>Proses import data selesai...!!!</h3>";
echo "<p>Jumlah Data Lama yang sukses di import sebanyak : ".$sukses."<br>";
echo "Jumlah Data Lama yang gagal di import sebanyak : ".$gagal."</p>
<input type=button value='Lihat Semua Data' onclick=\"window.location.href='mahasiswa.php';\"></center>";

?>