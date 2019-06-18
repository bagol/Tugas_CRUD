<?php
           $koneksi = mysqli_connect("localhost","root","","pemprog_web");
           $query = 'SELECT * FROM mahasiswa';
           $hasil= mysqli_query($koneksi,$query);
           $no = 1;
           while($d = mysqli_fatch_array($hasil)){
            echo $d['nama'];
            }
       ?>