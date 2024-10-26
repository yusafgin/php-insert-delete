<?php
require 'function.php';
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
 

    
    // cek apakah data berhasil di tambahkan atau tidak
   if( tambah($_POST) > 0 ) {
    echo "
    <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>
";
} 



else {


echo "
    <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>
";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama">
            </li>
           <li>
                <button type="submit" name="submit">Tambah Data!</button>
           </li>
        </ul>
    </form>

</body>
</html>