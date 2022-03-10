<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<h1>Contoh Kode PHP</h1>

	<?php
		//percabangan atau conditional
		$umur = 13;
		$jenisKelamin = "laki-laki";
		$sudahMenikah = true;
			if ($sudahMenikah and $umur > 17) {
				echo "Sudah bisa membuat SIM";
			} else if ($jenisKelamin == "perempuan"){
				echo "Bisa membuat SIM";
			} else {
				echo "Belum bisa membuat SIM <br/>";
			}
	?>
</body>
</html>