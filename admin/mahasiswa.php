<?php include 'header.php'; ?>

<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/KNN/admin/mahasiswa.php"> Data Mahasiswa</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			<ul class="nav navbar-nav">
				<li><a data-toggle="modal" data-target="#myModal"><i class="icon-plus-sign icon-white"> </i> Tambah Mahasiswa</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="get" action="cari_mahasiswa.php">
					<input type="text" class="form-control" name="cari" style="width: 200px" placeholder="Pencarian NIM . . ." required>
					<button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
				</form>
			</ul>
		</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

  </div>
</div>

<form method="post" action="import-mahasiswa.php" enctype="multipart/form-data">
<h4><span class="icon-file icon-black"></span>  Import Data Excel</h4> <input style='border:2px solid #6bd0b4;' type="file" name="userfile"/>
<input class="btn btn-default col-md-2 " type="submit" name="upload" value="Import">
</form>
<br/>
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from mahasiswa");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
	</table>
	<a style="margin-bottom:10px" href="laporan.php" target="_blank" class="btn btn-default pull-right"><span class='icon-print icon-white'></span>  Cetak</a>
</div>
<table class="table table-striped table-hover">
	<tr>
		<th class="col-md-1">NO</th>
		<th class="col-md-1">NIM</th>
		<th class="col-md-1">Jenis Kelamin</th>
		<th class="col-md-1">Jenis tinggal</th>
		<th class="col-md-1">Umur</th>
		
		<th class="col-md-1">Jumlah SKS</th>
<th class="col-md-1">Jumlah NM</th>	
	<th class="col-md-1">IPK</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$mahasiswa=mysql_query("select * from mahasiswa where nim like '$cari'");
	}else{
		$mahasiswa=mysql_query("select * from mahasiswa limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($mahasiswa)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nim'] ?></td>
			<td><?php echo $b['Jenis_Kelamin'] ?></td>
			<td><?php echo $b['Jenis_Tinggal'] ?></td>
			<td><?php echo $b['Umur'] ?></td>
			<td><?php echo $b['Jumlah_SKS'] ?></td>
			<td><?php echo substr($b['Jumlah_NM'],0,6) ?></td>
			<td><?php echo substr($b['IPK'],0,4) ?></td>
			<td>
				<a href="det_mahasiswa.php?nim=<?php echo $b['nim']; ?>" class="btn btn-success"><i class="icon-list icon-white"> </i> Detail</a>
				<a href="edit.php?nim=<?php echo $b['nim']; ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data dengan NIM <?php echo $b['nim'];?>  ??')){ location.href='hapus.php?nim=<?php echo $b['nim']; ?>' }" class="btn btn-danger"><span class='icon-trash icon-white'></span> Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	<tr>

		<td colspan="2">HAPUS SEMUA</td>
		 <td>
		<td>
		<td>
		<td>
		<td>
		<td>
		<td>				
		<a onclick="if(confirm('Apakah anda yakin ingin menghapus semua mahasiswa ??')){ location.href='del-all-mahasiswa.php' }" class="btn btn-danger"><span class='icon-trash icon-white'></span> Hapus Semua</a>
			
		</td>
	</tr>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Data Mahasiswa</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_mhs_act.php" method="post">
					<div class="form-group">
						<label>NIM</label>
						<input name="nim" type="text" class="form-control" placeholder="Nomor Induk Mahasiswa">
					</div>
					<div class="form-group">
					<label>Jenis Kelamin</label>
					<br>
					<label class="radio-inline"><input type="radio" name="Jenis_Kelamin" value="Laki-laki">Laki-laki</label>
					<label class="radio-inline"><input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan</label>
					</div>
					<div class="form-group">
					<label>Jenis Tinggal</label><br>
					<label class="radio-inline"><input type="radio" name="Jenis_Tinggal" value="Kost">Kost</label>
					<label class="radio-inline"><input type="radio" name="Jenis_Tinggal" value="Orang Tua">Orang Tua</label>
					<label class="radio-inline"><input type="radio" name="Jenis_Tinggal" value="Wali ">Wali</label>
					<label class="radio-inline"><input type="radio" name="Jenis_Tinggal" value="Asrama">Asrama</label>
					</div>
					<div class="form-group">
					<label>Umur</label>
						<input name="Umur" type="text" class="form-control" placeholder="Umur">
					</div>
					<div class="form-group">
					<label>Jumlah SKS</label>
						<input name="Jumlah_SKS" type="text" class="form-control" placeholder="Jumlah SKS">
					</div>
					<div class="form-group">
					<label>Jumlah NM</label>
						<input name="Jumlah_NM" type="text" class="form-control" placeholder="Jumlah NM">
					</div>
					<div class="form-group">
					<label>IPK</label>
						<input name="IPK" type="text" class="form-control" placeholder="IPK">
					</div>
					<div class="form-group">
					<label>Nilai</label><br>
					<label class="radio-inline"><input type="radio" name="Nilai" value="Pujian">Pujian</label>
					<label class="radio-inline"><input type="radio" name="Nilai" value="Sangat Memuaskan">Sangat Memuaskan</label>
					<label class="radio-inline"><input type="radio" name="Nilai" value="Memuasakan">Memuaskan</label>
					<label class="radio-inline"><input type="radio" name="Nilai" value="Cukup">Cukup</label>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>


<?php 
include 'footer.php';

?>
