<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP dan MYSQLi</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <a href="tambah.php">+ TAMBAH MAHASISWA +</a>
    <br>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
    </thead>
        
        <?php
            include 'koneksi.php';
            $query = 'SELECT * FROM mahasiswa';
            $hasil= mysqli_query($koneksi,$query);
            $no = 1;
            while($d = mysqli_fetch_array($hasil)){
        ?>
        <tbody>
        <tr>
            <td><?= $no ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['nim'] ?></td>
            <td><?= $d['alamat'] ?></td>
            <td>
                <a href="edit.php?id=<?=$d['id']?>"> EDIT</a> |
                <a href="hapus.php?id=<?=$d['id']?>"> HAPUS</a>
            </td>
        </tr>
        </tbody>
            
        <?php $no++; } ?>
    </table>
</body>
</html>