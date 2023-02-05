<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM upload_image WHERE id = '$_GET[id]'");
$row = mysqli_fetch_array($data);

$foto = $row['foto'];
if (file_exists('Gambar/'.$foto)) {
	unlink('file/'.$foto);
}

$query = "DELETE FROM upload_image WHERE id = '$_GET[id]'";
mysqli_query($koneksi, $query) or die("SQL ERROR".mysqli_error());
header("location: beranda.php");
?>