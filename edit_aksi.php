<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$sql = "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'";
mysqli_query($koneksi,$sql);
header("location:index.php");
?>