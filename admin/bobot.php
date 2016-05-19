<?php 
include 'header.php';
?>
<div class="clearfix">
<div class="row">
  
 <div class="col-xs-5"><div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header"><a class="navbar-brand" href="http://localhost/KNN/admin/bobot.php">Bobot</a>
			</div></div>
			</div>
<table class="table table-bordered">
	<tr>
		
		<th>Atribut</th>
		<th >Bobot</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$bobot=mysql_query("select * from bobot where nim like '$cari'");
	}else{
		$bobot=mysql_query("select * from bobot ");
	}
	$no=1;
	while($b=mysql_fetch_array($bobot)){

		?>
		<tr>
			
			<td><?php echo $b['Atribut'] ?></td>
			<td><?php echo $b['Bobot'] ?></td>
			
		</tr>		
		<?php 
	}
	?>
	
</table>
</div>		
</div>
</div>
</div>
<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
  
		<div class="container">
<?php include 'footer.php'; ?>
</div>
</div></div></div></div>