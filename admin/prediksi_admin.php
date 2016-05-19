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
	<form method="post" action="import-testing.php" enctype="multipart/form-data">
<h4><span class="icon-file icon-black"></span>  Import Data Excel</h4> <input style='border:2px solid #6bd0b4;' type="file" name="userfile"/>
<input class="btn btn-default col-md-2 " type="submit" name="upload" value="Import">
</form>
	
</div></div></div>
<?php include 'footer.php'; ?>