<?php
      include "koneksi.php"; 
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $simpan = mysql_query("Insert Into tb_siswa values('$nis','$nama','$alamat')");
      header('location:data.php');
?>