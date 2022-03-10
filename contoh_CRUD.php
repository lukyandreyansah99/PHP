<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>

<body>
	<?php
		try{
			// buat koneksi dengan database
			$dbh = new PDO('mysql:host=localhost;dbname=kelas_php', "root", "");

			// set error mode
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			/* query INSERT
			$query = 'INSERT INTO customer VALUES(3, "indah", "22", "Jalan Turki")';

			// jalankan query INSERT
			$result = $dbh->exec($query);

			// tampilkan hasil query
			echo $result." data berhasil disimpan";	
			*/

			/* query SELECT
			$result = $dbh->query('SELECT * FROM customer');

			// tampilkan data dengan menggunakan nama kolom sebagai index array
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo $row['nama']."||".$row['email']."||".$row['alamat'];
				echo "<br/>";
			}*/

			/* query UPDATE
			$query = 'UPDATE customer SET email="indah99@gmail.com" WHERE id=3';

			// jalankan query UPDATE 
			$result = $dbh->exec($query);

			// tampilkan hasil query
			echo $result." data berhasil diupdate";*/

			/* query DELETE
			$query = 'DELETE FROM customer WHERE id=3';

			// jalankan query UPDATE 
			$result = $dbh->exec($query);

			// tampilkan hasil query
			echo $result." data berhasil dihapus";*/

			// hapus koneksi
			$dbh = null;
		} catch (PDOException $e) {
			// tampilkan kesalahan jika koneksi gagal
			print "koneksi atau query bermasalah: ". $e->getMessage() . "<br/>";
			die();
		}
	?>
</body>
</html>