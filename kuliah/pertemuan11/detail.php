<?php 

require 'function.php';

//ambil dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $mhs['gambar']; ?>"></li>
        <li>ID : <?= $mhs['id']; ?></li>
        <li>NRP : <?= $mhs['nrp']; ?></li>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>Email : <?= $mhs['email']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        <li><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></li>
        <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    
    </ul>
</body>
</html>