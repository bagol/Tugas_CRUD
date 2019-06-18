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
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <h3>EDIT DATA MAHASISWA</h3>

    
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM mahasiswa where id=$id";
        $hasil= mysqli_query($koneksi,$query);
        $data=mysqli_fetch_array($hasil);
    ?>
    <form action="edit_aksi.php" method="post">
        <table>
            <input type="hidden" name="id" value="<?= $id ?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $data['nama']?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?= $data['nim']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $data['alamat']?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>