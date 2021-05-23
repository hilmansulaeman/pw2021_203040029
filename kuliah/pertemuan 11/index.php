<?php
require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

if (isset($_GET['cari'])) {
    $mahasiswa = cari($_GET['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 11</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>


<body>
    <div class="add">
        <a href="php/tambah.php"><button class="waves-effect waves-light btn" style="background-color: #8600f3;">Tambah Data</button></a>
    </div>
    <form class="cari" action="" method="GET">
        <input type="text" name="keyword" autofocus placeholder="Cari Mahasiswa.." autocomplete="off">
        <button type="submit" name="cari" class="waves-effect waves-light btn" style="background-color: #8600f3;">Cari</button>
        <button type="submit" class="waves-effect waves-light btn" style="background-color: #8600f3;">
            <a href="php/admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
    </form>

    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #c1b0ff;">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>#</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="php/ubah.php?id=<?= $mhs['id'] ?>"><button class="btn btn-secondary">Ubah</button></a>
                    <a href="php/hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="btn btn-secondary">Hapus</button></a>
                </td>
                <td><img src="assets/img/<?= $mhs["img"]; ?>"></td>
                <td><?= $mhs["nrp"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td>
                    <a href="php/detail.php?id=<?= $mhs['id'] ?>" style="text-decoration: none; color: white;">Lihat</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>