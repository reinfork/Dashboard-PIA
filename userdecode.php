<?php

$user = [
	[
		"nama" => "jordi",
		"kelas" => "B",
		"prodi" => "BIO"
	],
	[
		"nama" => "nala",
		"kelas" => "A",
		"prodi" => "MTK"
	]
];
$data =json_encode($user);
echo $data;

 ?>