<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from pegawai where id='$id'";
mysqli_query($connect, $query);
print"
<script>
	document.location='index.php';
</script>";
?>