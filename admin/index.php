<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>
<div class="clearfix">
<div class="alert alert-dismissable alert-success">

	Selamat datang <strong><? echo $_SESSION['uname']?></strong>	
   
</div>
</div>

<div class="alert alert-info">
<h4><i><u> <center> "Early Warning System" </u></i></h4>
<h6><color><p><span align="justify"> Early warning system (EWS) merupakan sebuah sistem peringatan dini terhadap nilai IPK pada masa yang akan datang.
Dengan menggunakan sistem ini akan dapat diketahui perkiraan nilai IPK seseorang <p> berdasarkan dari data sebelumnya. Adapun nilai IPK yang akan diprediksi adalah nilai IPK mahasiswa Sistem Informasi 2014/2015 yang saat ini sedang menjalani sesmeter 4. Prediksi nilai IPK ini 
<p>dilakukan dengan memanfaatkan metode Data Mining yaitu K-Nearest Neigbour (K-NN). Metode K-NN merupakan sebuah metode klasifikasi yang hasil dari klasifikasi ini nantinya bisa 
dijadikan sebagai <p> prediksi pada masa yang akan datang. Adapun cara  kerja metode K-NN berdasarkan dengan jarak terdekat antara data lama ( data training) dan data baru yang akan diprediksi (data testing) . Untuk <p> 
menghitung jarak kedekatan
digunakan persamaan Euclidean Disteance. Adapun tahapan metode perhitungan K-NN adalah :
<li><p> Tentukan nilaik K = 5
<li><p> Tentukan data training dan data testing. Pada kasus ini data training adalah mahasiswa 2012/2013 dan data testing adalah mahasiswa 2014/2015.  </p>
<li><p> Hitung jarak data testing ke setiap data training
<li><p> Urutkan hasil perhitungan jarak dari nilai yang terendah ke nilai yang tertinggi
<li><p> Ambil hasil jarak 5 terendah
<li><p> Nilai yang paling banyak muncul menjadi hasil untuk prediksi </span>

</div>
<!-- kalender -->



<?php 
include 'footer.php';

?>
