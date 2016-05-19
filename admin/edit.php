<?php 
include 'header.php';
?>
<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/KNN/admin/mahasiswa.php"> Edit Data</a>
			</div>
			<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			<ul class="nav navbar-nav">
				<li><a class="btn" href="mahasiswa.php"><i class="icon-arrow-left icon-white"> </i> Kembali</a></li>
			</ul>
<?php
$nim=mysql_real_escape_string($_GET['nim']);
$det=mysql_query("select * from mahasiswa where nim='$nim'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>	</div>
</div>
</div>				
	<form action="update.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs'] ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" class="form-control" name="nim" value="<?php echo $d['nim'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><label class="radio"><input type="radio" name="Jenis_Kelamin" value="LAKI-LAKI">Laki-laki</label>
					<label class="radio"><input type="radio" name="Jenis_Kelamin" value="PEREMPUAN">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td>Jenis Tinggal</td>
				<td><label class="radio"><input type="radio" name="Jenis_Tinggal" value="KOST">Kost</label>
					<label class="radio"><input type="radio" name="Jenis_Tinggal" value="ORANG TUA">Orang Tua</label>
					<label class="radio"><input type="radio" name="Jenis_Tinggal" value="WALI">Wali</label>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" class="form-control" name="Umur" value="<?php echo $d['Umur'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah SKS</td>
				<td><input type="text" class="form-control" name="Jumlah_SKS" value="<?php echo $d['Jumlah_SKS'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah NM</td>
				<td><input type="text" class="form-control" name="Jumlah_NM" value="<?php echo $d['Jumlah_NM'] ?>"></td>
			<tr>
				<td>IPK</td>
				<td><input type="text" class="form-control" name="IPK" value="<?php echo $d['IPK'] ?>"></td>
			</tr>
			<tr>
				<td>NIlai</td>
				<td><input type="text" class="form-control" name="Nilai" value="<?php echo $d['Nilai'] ?>"></td>
			</tr>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>