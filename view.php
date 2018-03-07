<?php
include 'koneksi.php';
$stmt = $connect->prepare("SELECT * FROM pegawai WHERE id = ".$_GET['id']);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();
if(!$res) exit('No rows');

?>
<html>
<head>
	<title>View data</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="favicon.ico">
</head>
<body>
	<div class="container col-6">
		<center class="display-4 text-white my-3">View data</center>
		<div class="card">
			<div class="card-block container">
				<div class="row my-1">
				  	<div class="col-md-3">
					 	<label for="NIP">NIP:</label>
				  	</div>
				  	<div class="col-md-4">
					 	<?php
					 	echo $res['nip'];
					 	?>
				  	</div>
				</div>
				<div class="row my-1">
				  <div class="col-md-3">
					 <label for="nama">Nama:</label>
				  </div>
				  <div class="col-md-4">
					 <?php echo $res['nama']?>
				  </div>
				</div>
				<div class="row">
					<div class="col-md-3">  
						<label for="jenkel">Jenis Kelamin</label>
					</div>
					<div class="col-md-4">
				  		<?php
						if ($row['jenkel'] = 'L') {
							echo "Laki-laki";
						} elseif ($row['jenkel'] = 'P') {
							echo "Perempuan";
						}
				  	?>
				  </div>
				</div>
				<div class="row my-1">
					<div class="col-md-3">
						<label for="no_usul">Nomor usul:</label>
					</div>
					<div class="col-md-4">
						<?php echo $res['no_usul'] ?>
				  </div>
				</div>
				<div class="row">
				  	<div class="col-md-3">
						<label for="alasan">Alasan:</label><br>
					</div>
					<div class="col-md-4">
					<?php
					if ($res['alasan'] == 1) {
						echo "Kehilangan";
					} elseif ($res['alasan'] == 2) {
						echo "Kesalahan nama";
					} elseif ($res['alasan'] == 3) {
						echo "Kesalahan tanggal lahir";
					} elseif ($res['alasan'] == 4) {
						echo "Kesalahan Jenis Kelamin";
					} else {
						echo "<label class='text-danger'>Data Salah</label>";
					}
					?>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-warning" onclick="document.location='index.php'"><i class="fa fa-reply"></i> Kembali</button>
			</div>
		</div>
	</div>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<?php
$stmt->close();
?>