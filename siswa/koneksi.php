<?php
//variabel database
$nama_host="localhost";
$user_db="root";
$password_db="";
$nama_db="db_siswa";

//koneksi database
$koneksi=mysql_connect($nama_host,$user_db,$password_db);

//bila terkoneksi
if($koneksi){
//pilih database
mysql_select_db($nama_db);
}else{
echo "Database tidak terkoneksi";
}

?>