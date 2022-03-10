<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<h1>Contoh Kode PHP</h1>

	<?php
		// tipe data
		$testString = "Luky Andreyansah";
		
		$testInteger = 12;
		$testInteger1 = 10;
		$testHasilInteger = $testInteger + $testInteger1;
		print "Hasil :". $testHasilInteger;

		$testFloat = 50.51;

		$testBoolean = true;
		$testBoolean = false;

		$array = array("garuda", "lion");
		$pesawat1 = "garuda";
		$pesawat2 = "lion";
		$kumpulanPesawat = array($pesawat1, $pesawat2);
		$kumpulanMobil = ["Honda Jazz", "Toyota Yaris"];

		var_dump($testInteger);
	?>
</body>
</html>