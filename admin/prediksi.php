<?php 
include 'header.php';
?>
<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/KNN/admin/prediksi.php"> Prediksi</a>
			</div>
			
</div>
</div>	</div> <div class="col-xs-10">			
	<form action="hasil_prediksi.php" method="POST">
		<table class="table">
			
			<tr>
				<td>NIM</td>
				<td><input type="text" class="form-control" name="nim"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><label class="radio"><input type="radio" name="Jenis_Kelamin" value="PRIA">Laki-laki</label>
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
				<td><input type="text" class="form-control" name="Umur"></td>
			</tr>
			<tr>
				<td>Jumlah SKS</td>
				<td><input type="text" class="form-control" name="Jumlah_SKS"></td>
			</tr>
			<tr>
				<td>Jumlah NM</td>
				<td><input type="text" class="form-control" name="Jumlah_NM"></td>
			</tr>
			<tr>
				<td>IPK</td>
				<td><input type="text" class="form-control" name="IPK"></td>
			</tr>
			<tr>
				<td></td>
			<td>
					<input type="submit" name="submit" class="btn btn-primary" value="Proses">

					<button type="reset" class="btn btn-default" >Reset</button>
					</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</form>
		</table>
	
	
</div></div></div>
<?php include 'footer.php'; ?>