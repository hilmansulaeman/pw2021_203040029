<?php
/*
Hilman Sulaeman
203040029
Mempelajari mengenai sintaks PHP
*/
?>
<?php
// Standar Output
// echo, print
// print_r
// var_dump

echo "Hilman Sulaeman";
print "(203040029)";
print_r("Kelas A");
var_dump("Contoh tulisan menggunakan var_dump");


?>


<?php
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
$nama = "Hilman";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo 'ini adalah paragraf'; ?></p>
</body>

</html>

<?
// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh diakhiri dengan angka
// contoh: $1nama (x)
//         $nama1 (v)
// $nama = "Afrizal";
// echo 'Halo, nama saya $nama'

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;
$x = 60;
$y = 20;
echo $x * $y;


// penggabunng string / concat
// .
$nama_depan = "Muhammad Afrizal";
$nama_belakang = "Fadillah";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 3;
$x *= 5;
echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(5 > 2);
var_dump(5 == "5");

// Identitas
// ===, !==
var_dump(3 === "3");


// Logika
// &&, ||, !
$x = 50;
var_dump($x < 60 && $x % 2 == 0);
var_dump($x > 60 || $x % 2 == 0);

?>