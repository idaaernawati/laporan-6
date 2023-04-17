<!DOCTYPE html>
<html>
<head>
	<title>Biodata Saya</title>
</head>
<body>
	<h2>Biodata Saya</h2>
	<?php
	$nama = $_POST["nama"];
	$gender = $_POST["gender"];	
	$umur = $_POST["umur"];
	$email = $_POST["email"];
	$alamat = $_POST["alamat"];
	$hobi = $_POST["hobi"];
	?>
	<p>Nama: <?php echo $nama; ?></p>
	<p>Gender: <?php echo implode($gender); ?></p>
	<p>Umur: <?php echo $umur; ?> tahun</p>
	<p>Email: <?php echo $email; ?></p>
	<p>Alamat: <?php echo $alamat; ?></p>	
	<p>Hobi: <?php echo implode(", ", $hobi); ?></p>
</body>
</html>
