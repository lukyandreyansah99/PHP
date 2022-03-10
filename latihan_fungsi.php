<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<?php
		function lihatStatus($nama, $umur) {
			echo "Nama saya adalah $nama, umur saya $umur tahun, status: ";

			if ($umur > 17 && $umur<= 30) {
				echo "Lolos Seleksi<br/>";
			} else {
				echo "Tidak Lolos Seleksi<br/>";
			}
		}

		$daftarPelamar = [
			["nama"=>"Felix", "umur"=>10],
			["nama"=>"Rumi", "umur"=>15],
			["nama"=>"Chodir", "umur"=>20],
			["nama"=>"Cayman", "umur"=>25],
			["nama"=>"John", "umur"=>30],
			["nama"=>"Cena", "umur"=>35],
			["nama"=>"Rudi", "umur"=>40],
			["nama"=>"Cheryl", "umur"=>45],
			["nama"=>"Agung", "umur"=>50],
			["nama"=>"Agus", "umur"=>55],
		];

		foreach ($daftarPelamar as $pelamar) {
			lihatStatus($pelamar["nama"], $pelamar["umur"]);
		}	
	?>
</body>
</html>