<?php
include 'koneksi.php';

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
move_uploaded_file($file_tmp, 'Gambar/'.$foto);

$sql = "INSERT INTO upload_image SET nama='$nama', foto='$foto'";
mysqli_query($koneksi, $sql);
header("location: beranda.php");
?>