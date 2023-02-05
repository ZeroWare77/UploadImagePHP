<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Beranda</title>
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<h2>Upload Gambar</h2>
				</div>
				<div class="col-md-12 mt-4">
					<?php
					$data = mysqli_query($koneksi, "SELECT * FROM upload_image ORDER BY id DESC");
					while ($row = mysqli_fetch_array($data)) {?>
						<div class="col-md-12 row mb-5">
							<div class="col-md-3">
								<img src="Gambar/<?php echo $row['foto'];?>" style="width: 100%;">
							</div>
							<div class="col-md-9">
								<h2><?php echo $row['nama']; ?></h2>
								<a href="hapus.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Hapus</a> <a href="index.php" class="btn btn-secondary">Kembali</a> <a href="download.php?foto=<?php echo $row['foto']; ?>" class="btn btn-success">Unduh</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>