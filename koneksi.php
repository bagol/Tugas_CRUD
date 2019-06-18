<?php
    $koneksi = mysqli_connect("localhost","root","","db_Mulyadih_Tugas_180619");

    if(mysqli_connect_error()){
        echo "koneksi gagal".mysqli_connect_error();
    }
?>