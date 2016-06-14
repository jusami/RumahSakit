<?php
include "../include/connect.php"; //sambung ke database

//mengambil data dari tabel suster
$sql = mysql_query("SELECT * FROM suster ORDER BY kode_suster");

?>
<h2 align="center"><u>Data Perawat </u></h2>
<table width="638" height="27" border="1" align="center">
  <tr bgcolor="#33FF33">
    <th width="55" scope="col">Kode Suster </th>
    <th width="131" scope="col">Nama</th>
    <th width="106" scope="col">Alamat</th>
    <th width="100" scope="col">No HP </th>
    <th width="141" scope="col">Nama Dokter </th>
    <th width="65" scope="col" colspan="2">Opsi</th>
  </tr>
  
 <?php
 $warna='';
while ($suster = mysql_fetch_array($sql)){
 include "../include/warna_tabel.php";
 echo "<tr bgcolor=$warna>
 <td>$suster[kode_suster]</td>
 <td>$suster[nama_suster]</td>
 <td>$suster[alamat_suster]</td>
 <td>$suster[no_tlp]</td>";
 //mengambil nama dokter
$sql2 = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = $suster[kode_dokter]");
$dokter = mysql_fetch_array($sql2);//pecah hasil query ke dalam array
echo "<td>$dokter[nama_dokter]</td>
<td><a href=update_suster.php?kode=$suster[kode_suster]><img src=../icon/update.png border=0 /></a></td>";?>
<td><a href=hapus_suster.php?kode=<?php echo $suster['kode_suster'] ?> onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0 /></a></td>
</tr>
<?php
 }
 ?>
</table>
