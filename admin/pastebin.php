<?php 
echo "<pre>";
$aAngka = array(3,4,6,2,7,9,1);
arsort($aAngka);
var_dump($aAngka);
$konstan=0;
foreach($aAngka as $key=>$value){
if($konstan<2){
echo 'key: '.$key.' and value: '.$value."<br />";
++$konstan;
}

}

echo "<pre>";
$aMobil = array(
array('produsen' => 'toyota', 'harga' => 20000),
array('produsen' => 'suzuki', 'harga' => 15000),
array('produsen' => 'honda', 'harga' => 21000),
array('produsen' => 'proton', 'harga' => 11000));

var_dump($aMobil);
function simSalabim($a, $b) {
return $b['harga'] - $a['harga'];
}

usort($aMobil, 'simSalabim');
var_dump($aMobil);

$konstan = 0;
foreach ($aMobil as $key => $value)
{
if ($konstan < 2)
{
var_dump($value);
++$konstan;
}

}
echo "<pre>";
 ?>