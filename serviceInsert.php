<?php 

$server_name	= 'localhost';
$username			= 'root';
$password			= '100200';
$db_name			= 'sensus_db';

$conn = new mysqli($server_name, $username, $password, $db_name);

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sqlWarga = "INSERT INTO warga (nik, password, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, stats_alamat, rt, rw, agama, bekerja) VALUES";
$sqlWargaAdditional = "INSERT INTO warga_additional (nik) VALUES";

$file_handle = fopen("wargadata.csv", "r");

$i = 0;
while (($row = fgetcsv($file_handle, 0, ",")) !== FALSE) {
	if($i > 0) {
		$nik 			= $row[0];
		$pass			= md5('1234');
		$nama 		= $row[1];
		$tmp_lhr	= $row[2];
		$tgl_lhr	= date('Y-m-d', strtotime($row[3]));
		$jk				= $row[4];
		$alamat		= $row[5];
		$stats_alamat = 0;
		$rt				= $row[6];
		$rw				= $row[7];
		$agama		= $row[8];
		if($row[9] == 'T') {
			$bekerja = 0;
		} else {
			$bekerja = 1;
		}

		$sqlWarga2 = $sqlWarga . " ('$nik', '$pass', '$nama', '$tmp_lhr', '$tgl_lhr', '$jk', '$alamat', $stats_alamat, $rt, $rw, '$agama', $bekerja)";
		$sqlWargaAdditional2 = $sqlWargaAdditional . " ('$nik')";

		// mysqli_query($conn, $sql2);
		if (mysqli_query($conn, $sqlWarga2)) {
			echo "New record created successfully \n";
		} else {
			echo "Error: " . $sqlWarga2 . "<br>" . mysqli_error($conn). "\n";
		}

		if (mysqli_query($conn, $sqlWargaAdditional2)) {
			echo "New record created successfully \n";
		} else {
			echo "Error: " . $sqlWargaAdditional2 . "<br>" . mysqli_error($conn). "\n";
		}
		// echo 'insert';
		// echo $tgl_lhr;
	}
	$i++;
	//Dump out the row for the sake of clarity.
	// var_dump($row);
}
mysqli_close($conn);



?>
