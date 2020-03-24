<?php
  $db_host = "127.0.0.1";
  $db_user = "root";
  $db_pass = "";
  $db_name = "moklet_perpustakaan";
  $koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
  // check connection
  if(mysqli_connect_errno()){
    echo "Koneksi database gagal : ".mysqli_connect_errno();
  }else{
    echo "Koneksi berhasil";
  }
?>
