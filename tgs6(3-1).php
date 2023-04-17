<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<h2>Form Biodata</h2>
	<form action="tgs6(3-2).php" method="post">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required><br><br>
		
		<label for="gender">Gender:</label><br>
		<input type="radio" id="gender1" name="gender[]" value="Man">
		<label for="gender1">Man</label><br>
		<input type="radio" id="gender2" name="gender[]" value="Woman">
		<label for="gender2">Woman</label><br><br>
		
		<label for="umur">Umur:</label>
		<input type="number" id="umur" name="umur" required><br><br>
		
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required><br><br>
		
		<label for="alamat">Alamat:</label>
		<textarea id="alamat" name="alamat" required></textarea><br><br>
		
		<label for="hobi">Hobi:</label><br>
		<input type="checkbox" id="hobi1" name="hobi[]" value="Melukis">
		<label for="hobi1">Melukis</label><br>
		<input type="checkbox" id="hobi2" name="hobi[]" value="Membaca">
		<label for="hobi2">Membaca</label><br>
		<input type="checkbox" id="hobi3" name="hobi[]" value="Mendengarkan Musik">		
		<label for="hobi3">Mendengarkan Musik</label><br>
		<input type="checkbox" id="hobi4" name="hobi[]" value="Berenang">
		<label for="hobi4">Berenang</label><br>
		<input type="checkbox" id="hobi5" name="hobi[]" value="Bersepeda">
		<label for="hobi5">Bersepeda</label><br><br>
		
		<input type="submit" value="Simpan">
	</form>
</body>
</html>
