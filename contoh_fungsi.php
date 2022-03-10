<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<h1>Contoh Fungsi 1</h1>
	<?php
		function lihatNama($nama, $tanggalLahir) {
			echo "Nama saya adalah $nama, saya lahir pada tanggal $tanggalLahir<br/>";
		}

		$nama = "Andre";
		$tanggalLahir = "10 Agustus 2000";
		lihatNama($nama, $tanggalLahir);
		lihatNama("Luky", "9 Agustus 1999")
	?>

	<h1>Contoh Fungsi 2</h1>
	<?php
		function cetakString($string, $perulangan) {
			for ($i=0; $i < $perulangan ; $i++) { 
				echo "$string<br/>";
			}
		}

		cetakString("Saya hebat", 10);
	?>

	<h1>Contoh Fungsi 3</h1>
	<?php
		function hitungGaji($gajiAwal) {
			// ini merupakan contoh gaji yang dipotong pajak 10%
			$gajiAkhir = $gajiAwal - ($gajiAwal*10/100);
			// ini merupakan contoh gaji dengan bonus gaji
			$gajiAkhir = $gajiAkhir + 1000000;
			return ($gajiAkhir);
		}

		echo hitungGaji(4200000). "<br/>";
		echo hitungGaji(3000000);
	?>
</body>
</html>