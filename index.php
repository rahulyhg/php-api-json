<?php
require_once 'koneksi.php';

$query = "SELECT * FROM data";

$sql = mysqli_query($koneksi, $query);

$data = array();

while ($row = mysqli_fetch_array($sql)) {
	array_push($data, array(
		"id siswa" => $row ['id'],
		"nama siswa" => $row ['username'],
		"password siswa" => $row ['password']
	));
}
echo json_encode($data);

mysqli_close($koneksi);

?>