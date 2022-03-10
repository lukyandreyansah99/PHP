<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<h1>Contoh Kode PHP</h1>

	<?php
		// while loop
		$x = 1;

		while ( $x < 11) {
			echo "Rekomendasi tempat wisata". " ". $x. "<br/>";
			$x = $x + 1;
		}

		// for loop
			for ($y=1; $y < 10; $y++){
			echo "cetak ke ". $y. "<br/>";
		}
	?>
</body>
</html>