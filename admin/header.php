<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
<!DOCTYPE html>
<html>
<head>
	
	<title>EARLY WARNING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
				<a href="http://localhost/KNN/admin/index.php" class="navbar-brand"><b>EARLY WARNING SYSTEM</b></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">
			<?php 
				if ($_SESSION["tipe"] == "admin") {
					?>
					<li><a href="index.php"><span class="icon-home icon-white"></span> Home</a></li>			
					</li>
					<li><a href="mahasiswa.php"><span class="icon-book icon-white"></span> Data Mahasiswa</a></li>
					</li> 
					<li><a href="prediksi_admin.php"><span class="icon-check icon-white"></span> Prediksi</a></li>    
					<?php
				}
				if ($_SESSION["tipe"] == "mahasiswa") {
					?>
						<li><a href="index.php"><span class="icon-home icon-white"></span> Home</a></li>			
					<li><a href="hasil_prediksi.php"><span class="icon-check icon-white"></span> Prediksi</a></li>    
					<?php
				}
				if (!$_SESSION["tipe"]) {
					?>
						<li><a href="../index.php"><span class="icon-home icon-white"></span> Kembali Kehalaman Login</a></li>			
				<?php
				}
			 ?>
		</ul>
		
			<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Selamat Datang , <b style='color:yellow'><?php echo $_SESSION['uname']  ?></b>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span><strong class="caret"></strong></a>
									<ul class="dropdown-menu">
									
										<li><a href="ganti_pass.php"><span class="icon-lock icon-black">&nbsp</span>  Ganti Password</a></li>
									
										<li><a href="logout.php"><span class="icon-off icon-black">&nbsp</span> Logout</a></li>
									</ul>
								</li>

							</ul>				
				
			</div>
		</div>
	</div>
</div>
</div>
    <div class="container">

      <div class="page-header" id="banner">
        
      </div>
</body>
</html>


	
