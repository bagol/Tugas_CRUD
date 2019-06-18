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
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>