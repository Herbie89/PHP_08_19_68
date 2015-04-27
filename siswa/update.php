<?php
include "koneksi.php";
$nis=$_GET['nis'];
$query=mysql_query("select * from tb_siswa where nis='$nis'");
?>
<form action="simpan.php" method="post">
<table border="1">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="nis" value="<?php echo $nis;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="nama" value="<?php echo $row['nama'];?>" /></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea cols="20" rows="5" name="alamat"><?php echo $row['alamat'];?></textarea></td>
</tr>
<tr><td><input type="submit" value="Simpan" name="simpan" /></td>
</tr>
<?php
}
?>
</table>
</form>