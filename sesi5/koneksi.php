<?php
//cara menyertakan konfigurasinya
   // include();
   // include_once();
   // require();
   // require_once();

   include("konfigurasi.php");

    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "Koneksi ke Mysql Suksess";
    }else{
        echo "Koneksi ke Mysql Gagal";
    }