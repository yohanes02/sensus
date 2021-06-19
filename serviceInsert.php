<?php 

$server_name	= 'localhost';
$username			= 'root';
$password			= '100200';
$db_name			= 'sensus_db';

$conn = new mysqli($server_name, $username, $password, $db_name);

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO warga (nik, password, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, rt, rw, agama, bekerja) VALUES";

$file_handle = fopen("warga.csv", "r");

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
		$rt				= $row[6];
		$rw				= $row[7];
		$agama		= $row[8];
		if($row[9] == 'T') {
			$bekerja = 0;
		} else {
			$bekerja = 1;
		}

		$sql2 = $sql . " ('$nik', '$pass', '$nama', '$tmp_lhr', '$tgl_lhr', '$jk', '$alamat', $rt, $rw, '$agama', $bekerja)";

		// mysqli_query($conn, $sql2);
		if (mysqli_query($conn, $sql2)) {
			echo "New record created successfully \n";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn). "\n";
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
