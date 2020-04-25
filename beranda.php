<?php 
include 'aset/header.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
<script src="http://localhost/karantina/aset/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost/karantina/aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/karantina/aset/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="http://localhost/karantina/aset/logas.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
<br/>
<br/>
<center>
  <h2>WELCOME PETUGAS KARANTINA</h2>
</center>
    	<br/>
        <br/>
        <center>
		<div class="row">
			<div class="col-md-4">
				<div class="card bg-danger" style="width: 18rem;">
  					<div class="card-body text-white">
    					<h5 class="card-title">Jumlah pasien</h5>
    						<p class="card-text" style="font-size: 60px">10</p>
    							<a href="http://localhost/karantina/pasien/index.php" class="text-white">Lebih Detail<i class="fas fa-angle-double-right"></i></a>
  					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bg-warning" style="width: 18rem;">
  					<div class="card-body text-white">
    					<h5 class="card-title">Jumlah petugas</h5>
    						<p class="card-text" style="font-size: 60px">6</p>
    							<a href="http://localhost/siperpus/anggota/index.php" class="text-white">Lebih Detail<i class="fas fa-angle-double-right"></i></a>
  					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bg-info" style="width: 18rem;">
  					<div class="card-body text-white">
    					<h5 class="card-title">Jumlah positif corona</h5>
    						<p class="card-text" style="font-size: 60px">2</p>
    							<a href="http://localhost/siperpus/transaksi/index.php" class="text-white">Lebih Detail<i class="fas fa-angle-double-right"></i></a>
  					</div>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
</center>
<?php  
include 'aset/footer.php';
?>