<?php 
include 'header.php';
?>
<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/KNN/admin/det_mahasiswa.php"> Detail Data Mahasiswa</a>
			</div>
			<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			<ul class="nav navbar-nav">
				<li><a class="btn" href="mahasiswa.php"><i class="icon-arrow-left icon-white"> </i> Kembali</a></li>
			</ul>

<?php
$nim=mysql_real_escape_string($_GET['nim']);


$det=mysql_query("select * from mahasiswa where nim='$nim'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>	
	</div>
</div>
</div>
				
	<table class="table">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo $d['nim'] ?></td>
			</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $d['Jenis_Kelamin'] ?></td>
			</tr>
			<tr>
			<td>Jenis Tinggal</td>
			<td>:</td>
			<td><?php echo $d['Jenis_Tinggal'] ?></td>
			</tr>
			<tr>
			<td>Umur</td>
			<td>:</td>
			<td><?php echo $d['Umur'] ?></td>
			</tr>
			<tr>
			<td>Jumlah SKS</td>
			<td>:</td>
			<td><?php echo $d['Jumlah_SKS'] ?></td>
			</tr>
			<tr>
			<td>Jumlah NM</td>
			<td>:</td>
			<td><?php echo $d['Jumlah_NM'] ?></td>

		</tr>
		
	</table>

	<?php 
}
?>
</div></div></div>
<?php include 'footer.php'; ?>