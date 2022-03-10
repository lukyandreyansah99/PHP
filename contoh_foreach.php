<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<?php
		$daftarPeserta = array("peserta1", "peserta2", "peserta3");

		foreach ($daftarPeserta as $peserta) {
			echo "Ini adalah ". $peserta. "<br/>";
		}
	?>
</body>
</html>
