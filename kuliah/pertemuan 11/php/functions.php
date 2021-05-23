<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040029");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$img', '$nrp', '$nama', '$email', '$jurusan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
            WHERE
            nrp LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
