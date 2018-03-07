<html>
<head>
	<title>Input</title>
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
  	<form action="proses.php" method="post">
		<div class="container">
			<center class="display-4 text-white my-3">Input Data</center>
			<div class="card">
					<div class="card-block container">
						<div class="row my-1">
							<div class="col-md-3">
								<label for="NIP">NIP:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nip" name="nip" required>
							</div>
						</div>
						<div class="row my-1">
							<div class="col-md-3">
								<label for="nama">Nama:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nama" name="nama" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">	
								<label for="jenkel">Jenis Kelamin</label>
							</div>
							<div class="col-md-4">
								<div class="custom-control custom-radio">
										<input class="custom-control-input"  type="radio" name="jenkel" value="L" id="jk1">
										<label class="custom-control-label"  for="jk1">Laki - Laki</label>
								</div>
								<div class="custom-control custom-radio">
										<input class="custom-control-input"  type="radio" name="jenkel" value="P" id="jk2">
										<label class="custom-control-label"  for="jk2">Perempuan</label>
								</div>
							</div>
						</div>
						<div class="row my-1">
							<div class="col-md-3">
								<label for="no_usul">Nomor usul:</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="no_usul" name="no_usul" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<label for="alasan">Alasan:</label><br>
							</div>
							<div class="col-md-4">
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="1" id="option1">
									<label class="custom-control-label"  for="option1">Kehilangan</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="2" id="option2">
									<label class="custom-control-label"  for="option2">Kesalahan Nama</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="3" id="option3">
									<label class="custom-control-label"  for="option3">Kesalahan tanggal lahir</label>
								</div>
								<div class="custom-control custom-radio">
									<input class="custom-control-input"  type="radio" name="alasan" value="4" id="option4">
									<label class="custom-control-label"  for="option4">kesalahan jenis kelamin</label>
								</div>
							</div>
						</div>
			  		</div>
				<div class="card-footer">
					<button onclick="window.location='index.php'" class="btn btn-warning"><i class="fa fa-reply"></i> Kembali</button>
					<button type="submit" name="input" class="btn btn-primary"><i class="fa fa-gear"></i> Submit</button>
				</div>
		  	</div>
		</div>
	</form>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>