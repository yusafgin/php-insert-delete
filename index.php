<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama LIMIT 20");




// koneksi ke database
//$conn = mysqli_connect("localhost", "root","", "web sekolah");
// ambil data dari tabel mahasiswa
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nama LIMIT 20");
//ambil data (fetch) mahasiswa dari objek result
//mysqli_fetch_row() // mengembailan array numerik
//mysqli_fetch_assoc()// mengembalikan array associative
//mysqli_fetch_array()//mengembalikan keduanya
//mysqli_fetch_object()

//while ($mhs = mysqli_fetch_row($result) )
//var_dump($mhs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Id</th>
        <th>Nim</th>
        <th>Nama</th>
        
    
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
        </td>
        <td><?= $row["id"]; ?></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        

        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>

</body>
</html>