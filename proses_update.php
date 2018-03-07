<?php
include 'koneksi.php';
	$id		= $_POST['id'];
	$stmt	= $connect->prepare("UPDATE pegawai SET nip = ?, nama = ?, jenkel = ?, no_usul = ?, alasan = ? WHERE id = $id");
	$stmt->bind_param("issss", $_POST['nip'], $_POST['nama'], $_POST['jenkel'], $_POST['no_usul'], $_POST['alasan']);
	$stmt->execute();
	$stmt->close();
	print "<script>alert('Berhasil memperbarui')
	window.location = 'index.php';
	</script>";

?>