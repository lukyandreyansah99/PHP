<!DOCTYPE html>
<html>
<head>
	<title>Contoh php</title>
</head>
<body>
	<h1>Contoh Kode PHP</h1>

	<?php
		// class merupakan wadah untuk property dan method
		class pelamarKerja {
		
		// property berisi atribut
		var $nama;
		var $umur;
		var $status;

		// method berupa aksi dari class yang dibuat
		function tampilkan_nama(){
			return "Nama saya: Luky Andreyansah <br/>
					Nama saya: Fatin <br/>";
		}

		function tampilkan_umur(){
			return "Umur saya: 22 Tahun <br/>
					Umur saya: 25 Tahun <br/>";
		}

		function tampilkan_status(){
			return "Status: Diterima <br/>
					Status: Diterima <br/>";
		}
	}
	// output
	$pelamarKerja = new pelamarKerja();

	echo $pelamarKerja->tampilkan_nama();
	echo $pelamarKerja->tampilkan_umur();
	echo $pelamarKerja->tampilkan_status();
	?>
</body>
</html>