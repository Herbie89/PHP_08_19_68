<?php
include "koneksi.php";
$id=$_POST['nis'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$query=mysql_query("update tb_siswa set nama='$nama', alamat='$alamat' where nis='$id'");
if($query){
header ('location:data.php');
?> php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>