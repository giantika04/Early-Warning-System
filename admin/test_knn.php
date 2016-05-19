<?php

$bawangMerah = array(
// inflasi, kurs rupiah, PDB,uang beredar  ---> Harga

    array(0.0000726,10075.73,2865250000000000,4358800000000000,36459),   // 0 =>
    array(0.0000726,10075.73,2865250000000000,4358800000000000,36459),  // 1 =>
    array(0.0000726,10075.73,2865250000000000,4358800000000000,36459),   // 2 =>
    array(0.0000726,10236.15,2865250000000000,4358800000000000,36579),   // 3 =>
    array(0.0000726,10180.55,2865250000000000,4358800000000000,36796),   // 4 =>
	array(0.0000726,10174.33,2865250000000000,4358800000000000,36636),  
	array(0.0000726,10174.33,2865250000000000,4358800000000000,36636), 
	array(0.0000726,10130.60,2865250000000000,4358800000000000,34973), 
	array(0.0000726,10227.84,2865250000000000,4358800000000000,35256), 
	array(0.0000726,10182.56,2865250000000000,4358800000000000,34750), 
	array(0.0000726,10266.02,2865250000000000,4358800000000000,33701), // 10 =>
);

echo "============================<br>" ; 
echo "Data Training <br>" ; 
echo '<pre>';
   print_r($bawangMerah) ;

echo "============================<br>" ; 
echo "Data Testing <br>" ; 
$indeks = 10 ; 
$outTetangga = 3 ; 
echo "Indeks ke = ".$indeks. "<br>" ;
echo "Jumlah Keluaran Tetangga = ".$outTetangga."<br>" ;

$jarak = $bawangMerah;
array_walk($jarak, 'JarakEuclidean', $bawangMerah);

// Uji Coba, target = datapoint indeks 10, menghasilkan 3 tetangga terdekat

$tetangga_k = dapatkan_NN($jarak, $indeks, $outTetangga);
echo "============================<br>" ; 
echo "Perhitungan Tetangga Terdekat <br>" ; 
echo implode("<br>", $tetangga_k)."<br>";
echo "============================<br>" ; 

echo getLabel($bawangMerah, $tetangga_k)."<br>"; 

function JarakEuclidean(&$sourceCoords, $sourceKey, $data)
{   
    $jarak = array();
    list ($x1, $x2, $x3,$x4) = $sourceCoords;
	
    foreach ($data as $destinationKey => $destinationCoords) {
        // Same point, ignore
        if ($sourceKey == $destinationKey) {
           continue;
        }
        list ($y1, $y2,$y3,$y4) = $destinationCoords;


        $jarak[$destinationKey] = sqrt(pow($x1 - $y1, 4) + pow($x2 - $y2, 4) + pow($x3 - $y3, 4) + pow($x4 - $y4, 4));	
    }
    asort($jarak);	
    $sourceCoords = $jarak;
}

function dapatkan_NN($jarak, $key, $num)
{
    return array_slice($jarak[$key], 0, $num, true);
}

function getLabel($data, $tetangganya)
{
	
    $results = array();
    $tetangganya = array_keys($tetangganya);
	
		echo "Indeks Tetangganya <br>" ;
		echo implode("<br>", $tetangganya)."<br>";
		echo "============================<br>" ; 
    foreach ($tetangganya as $neighbor) {
        $results[] = $data[$neighbor][4];
    }
	 $rata2 = array_sum($results) / count($results); 

	 	echo "Output Harga Tetangga <br>" ;
	 echo implode("<br>", $results)."<br>";
echo "============================<br>" ; 
	echo "Prediksi harga Bawang Merah Per Kilogram saat ini : <br>" ; 

	return $rata2 ; 
		echo "============================<br>" ; 
}
?>