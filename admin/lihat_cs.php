<?php
include "../include/connect.php";//sambung ke mysql

$query = mysql_query("SELECT * FROM cleaning_service");
?>
<h2 align="center"><u>Data Cleaning Service </u></h2>
<table width="558" border="1" align="center">
  <tr bgcolor="#33FF33">
    <th width="40" scope="col">Kode CS </th>
    <th width="65" scope="col">Kode Ruangan</th>
    <th width="128" scope="col">Nama </th>
    <th width="112" scope="col">Alamat</th>
    <th width="115" scope="col">No HP </th>
    <th width="58" scope="col" colspan="2">Opsi</th>
  </tr>
<?php 
$warna = '';
while ($cs = mysql_fetch_array($query)){
include "../include/warna_tabel.php";
echo "<tr bgcolor=$warna>
<td>$cs[kode_clean_serv]</td>
<td>$cs[kode_ruangan]</td>
<td>$cs[nama_clean_serv]</td>
<td>$cs[alamat_clean_serv]</td>
<td>$cs[no_tlp]</td>
<td><a href=update_cs.php?kode=$cs[kode_clean_serv]><img src=../icon/update.png border=0></a></td>";?>
<td><a href="hapus_cs.php?kode=<?php echo $cs['kode_clean_serv']?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0></a></td>
</tr>
<?php
}
?>  
  
</table>
