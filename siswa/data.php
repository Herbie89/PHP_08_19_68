<?php
include "koneksi.php";
$query=mysql_query("select * from tb_siswa");
$jumlah=mysql_num_rows($query);
echo "Jumlah data ada : ".$jumlah;
?>
<table border="1" cellspacing="0">
<tr>
<th>Nis</th>
<th>Nama</th>
<th>ALamat</th>
<th>Aksi</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['nis'];?></td>
<td><?php echo $row['nama'];?></td>
<td><?php echo $row['alamat'];?></td>
<td>
<a href="delete.php?nis=<?php echo $row['nis']; ?>" onclick="return confirm('Apakah anda
yakin?')">Hapus</a>
<a href="update.php?nis=<?php echo $row['nis']; ?>">Edit </a>
</td>
<?php
}
?>
</table><br />
<a href="index.php">Tambah Data</a><br><br>