<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040097",
		"nama" => "Hervin Fakhrul",
		"email" => "hervinfakhrulm@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "vin.jpg"
	],
	[
		"nama" => "Cecillia Vany", 
		"nrp" => "203040500",
		"email" => "vnycclll@gmail.com",
		"jurusan" => "Fakultas Kedokteran Gigi",
		"gambar" => "wawa.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>