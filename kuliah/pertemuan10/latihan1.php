<?php
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 10 - 22 April 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php 
// koneksi ke DB dan pilih DB
$conn = mysqli_connect('localhost', 'root','', 'pw1_tubes_203040025');

//query isi tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
// $row = mysqli_fetch_row($result); Array numerik
// $row = mysqli_fetch_assoc($result); Array assosiative
// $row = mysqli_fetch_array($result); Keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//tampung ke varubel mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; 
        foreach($mahasiswa as $mhs) : ?>

        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
                <a href="">ubah</a>  | <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>