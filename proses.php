<?php
include 'koneksi.php';
$nip            = $_POST['nip'];
$nama           = $_POST['nama'];
$jenkel        	= $_POST['jenkel'];
$no_usul  		= $_POST['no_usul'];
$alasan         = $_POST['alasan'];

$sql = $connect->prepare("INSERT INTO pegawai (nip, nama, jenkel, no_usul, alasan) VALUES (?,?,?,?,?)");
$sql->bind_param('issss', $nip, $nama, $jenkel, $no_usul, $alasan);
$sql->execute();
$sql->close();
	print"
	<script>
	alert(\" Berhasil \");
	document.location='index.php';
	</script>";
$connect->close();
?>