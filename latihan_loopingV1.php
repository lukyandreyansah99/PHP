<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<?php
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
			if ($pelamar ["umur"] > 17 && $pelamar ["umur"] <= 30) {
				echo "Nama: ". $pelamar["nama"]. ", ". "Umur: ". $pelamar["umur"]. ", " . "Status: "."Lolos Seleksi <br/>";
			} else {
				echo "Nama: ". $pelamar["nama"]. ", ". "Umur: ". $pelamar["umur"]. ", " . "Status: "."Tidak Lolos Seleksi <br/>";
			} 
		}
	?>
</body>
</html>