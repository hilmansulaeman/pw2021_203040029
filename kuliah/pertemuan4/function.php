<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}

/* 
    Nama : Hilman Sulaeman
    NRP : 203040029
    Kelas A
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("Siang", "Men"); ?></h1>
</body>

</html>