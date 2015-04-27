<?php
include "koneksi.php";
$nis=$_GET['nis'];
$query=mysql_query("delete from tb_siswa where nis='$nis'");
if($query){
?><script language="javascript">document.location.href="data.php";</script><?php
}else{
echo "gagal hapus data";
}
?>