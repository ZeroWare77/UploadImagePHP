<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>UploadFoto</title>
</head>
<body>
	<div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Upload Foto</h2>
				</div>
				<div class="col-md-12 mt-5 p-5">
					<form method="post" action="upload.php" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>

						<div class="mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control">
						</div>

						<div class="mb-3 text-center">
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>