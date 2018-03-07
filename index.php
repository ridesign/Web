
<html>
<head>
	<title>Data Pegawai</title>
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
	<div class="container-fluid">
		<center>
			<h1 class="display-4 text-white my-3">Data Pegawai</h1>	
		</center>
		<div class="card">
			<div class="card-header">
				<center>
					<a href="input.php" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
				</center>
			</div>
			<div class="card-block">
				<div class="table-responsive">
				 	<table class="table table-sm table-hover table-striped">
					  	<tr class="thead-dark">
					  		<th align="center">No</th>
							<th>NIP</th>
							<th>NAMA</th>
							<th>Jenis Kelamin</th>
							<th>No Usulan</th>
							<th>Alasan</th>
							<th style="width: 10%">Action</th>
					  	</tr>
						<?php
							$no = 1; 
							include 'koneksi.php';
							$sql = mysqli_query($connect, "SELECT * from pegawai");
							foreach ($sql as $row){
						?>
						<tr>
							<td align="center"><?php echo $no++ ?></td>
							<td><?php echo $row['nip'] ?></td>
							<td><?php echo $row['nama'] ?></td>
							<td><?php if ($row['jenkel']  == 'L'){
										echo "Laki - laki";
									} else {
										echo "Perempuan";
									} ?></td>
							<td><?php echo $row['no_usul'] ?></td>
							<td>
								<?php
								if ($row['alasan'] == 1) {
									echo "Kehilangan";
								} else {

								}
								if ($row['alasan'] == 2) {
									echo "Kesalahan nama";
								} else {
									$check2 = "";
								}
								if ($row['alasan'] == 3) {
									echo "Kesalahan tanggal lahir";
								} else {
									$check3 = "";
								}
								if ($row['alasan'] == 4) {
									echo "kesalahan jenis kelamin";
								} else {
								}
								?>
							</td>
							<td>
								<div class="btn-group justify-content-center">
									<?php
								echo "<a href='view.php?id=" . $row['id']."'class='btn btn-outline-info'><i class='fa fa-info-circle'></i></a>";
								echo "<a href='update.php?id=" . $row['id']."'class='btn btn-outline-primary'><i class='fa fa-pencil'></i></a>";
								echo "<a href='delete.php?id=" . $row['id']."' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-outline-danger'><i class='fa fa-trash'></i></a>";
								?>
								</div>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="panel-footer"></div>
		</div>
	</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi hapus data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			Apakah Anda ingin menghapus data ini ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
				<?php echo "<a href='delete.php?id=" . $row['id']."'class='btn btn-danger'><i class='fa fa-trash'></i> Hapus</a>" ?>
			</div>
		</div>
	</div>
</div>
<script language="javascript">
function tanya() {
if (confirm("Apakah anda ingin hapus data ini ?")){
	return true;
} else {
	return false;
}
}
</script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>