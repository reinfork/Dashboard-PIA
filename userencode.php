<?php

// $user = [
// 	[
// 		"nama" => "jordi",
// 		"kelas" => "B",
// 		"prodi" => "BIO"
// 	],
// 	[
// 		"nama" => "nala",
// 		"kelas" => "A",
// 		"prodi" => "MTK"
// 	]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=test','root','');
$db = $dbh->prepare('SELECT * FROM user');
$db->execute();
$user = $db->fetchALl(PDO::FETCH_ASSOC);


$data =json_encode($user);

echo $data;

 ?>