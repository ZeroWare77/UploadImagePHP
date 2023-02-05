<?php
if(!empty($_GET['foto'])){
	$fileName = basename($_GET['foto']);
	$filePath = "Gambar/".$fileName;
	
	if(!empty($fileName) && file_exists($filePath)) {
		header("Content-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: Attachment; filename=$fileName");
		header("Content-Type: Application/Image");
		header("Content-Transfer-Encoding: binary");
		readfile($filePath);
		exit;
	}
	else{
		echo "File not exits";
	}
}
?>