<?php
include 'koneksi.php';
$sql = $connect->query("SELECT * FROM pegawai WHERE id=".$_GET['id']);
$row = $sql->fetch_assoc();
?>
<html>
<head>
	<title>Update Data</title>
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
  	<form action="proses_update.php" method="post">
		<div class="container">
			<center class="display-4 text-white my-3">Update data</center>
			<div class="card">
					<div class="card-block container">
						<div class="row my-1">
							<input hidden name="id" type="text" value="<?php echo $row['id']; ?>">
							<div class="col-md-3">
								<label for="NIP">NIP:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row['nip'] ?>">
							</div>
						</div>
						<div class="row my-1">
							<div class="col-md-3">
								<label for="nama">Nama:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">	
								<label for="jenkel">Jenis Kelamin</label>
							</div>
							<?php
							if ($row['jenkel'] = 'L') {
									$status1 = "checked";
							} else {
									$status1 = "";
							}
							if ($row['jenkel'] = 'P') {
									$status2 = "checked";
							} else {
									$status2 = "";
							}
							?>
							<div class="col-md-4">
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="jenkel" value="L" id="jk1" <?php echo $status1 ?>>
									<label class="custom-control-label"  for="jk1">Laki - Laki</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="jenkel" value="P" id="jk2" <?php echo $status2 ?>>
									<label class="custom-control-label"  for="jk2">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="row my-1">
							<div class="col-md-3">
								<label for="no_usul">Nomor usul:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="no_usul" name="no_usul" value="<?php echo $row['no_usul'] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<label for="alasan">Alasan:</label><br>
							</div>
							<div class="col-md-4">
								<?php
								if ($row['alasan'] == 1) {
									$alasan1 = "checked";
								} else {
									$alasan1 = "";
								}
								if ($row['alasan'] == 2) {
									$alasan2 = "checked";
								} else {
									$alasan2 = "";
								}
								if ($row['alasan'] == 3) {
									$alasan3 = "checked";
								} else {
									$alasan3 = "";
								}
								if ($row['alasan'] == 4) {
									$alasan4 = "checked";
								} else {
									$alasan4 = "";
								}
								?>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="Kehilangan" id="option1" <?php echo $alasan1 ?>>
									<label class="custom-control-label"  for="option1">Kehilangan</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="kesalahan nama" id="option2" <?php echo $alasan2 ?>>
									<label class="custom-control-label"  for="option2">Kesalahan Nama</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="kesalahan tanggal lahir" id="option3" <?php echo $alasan3 ?>>
									<label class="custom-control-label"  for="option3">Kesalahan tanggal lahir</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="kesalahan jenis kelamin" id="option4" <?php echo $alasan4 ?>>
									<label class="custom-control-label"  for="option4">kesalahan jenis kelamin</label>
								</div>
							</div>
						</div>
			  		</div>
				<div class="card-footer">
					<a onclick="window.location='index.php'" class="btn btn-warning">Batal</a>
					<input type="submit" name="input" class="btn btn-primary" value="submit">
				</div>
		  	</div>
		</div>
	</form>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>