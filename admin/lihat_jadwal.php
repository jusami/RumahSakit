<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil seluruh data dari tabel jadwal jaga
$query = mysql_query("SELECT * FROM jadwal_jaga ORDER BY kode_jaga");

?>
<h2 align="center"><u>Daftar Jadwal Piket Jaga </u></h2>
<table width="624" border="1" align="center">
  <tr bgcolor="#33FF33">
    <th width="46" scope="col">Kode Jaga </th>
    <th width="101" scope="col">Waktu Siaga </th>
    <th width="145" scope="col">Dokter Jaga </th>
    <th width="125" scope="col">Suster Jaga </th>
    <th width="110" scope="col">Receptionist</th>
    <th width="57" scope="col" colspan="2">Opsi</th>
  </tr>

<?php
$warna = '';
while ($jadwal = mysql_fetch_array($query)){
include "../include/warna_tabel.php";
echo "<tr bgcolor=$warna>
<td>$jadwal[kode_jaga]</td>
<td>$jadwal[waktu_jaga]</td>";
$dok = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = '$jadwal[kode_dokter]'");
$dokter = mysql_fetch_array($dok);
echo "<td>$dokter[nama_dokter]</td>";
$sus = mysql_query("SELECT nama_suster FROM suster WHERE kode_suster = '$jadwal[kode_suster]'");
$suster = mysql_fetch_array($sus);
echo "<td>$suster[nama_suster]</td>";
$rec = mysql_query("SELECT nama_receptionist FROM receptionist WHERE kode_receptionist = '$jadwal[kode_receptionist]'");
$recept = mysql_fetch_array($rec);
echo "<td>$recept[nama_receptionist]</td>
<td><a href=update_jadwal.php?kode=$jadwal[kode_jaga]><img src=../icon/update.png border=0 /></a></td>"; ?>
<td><a href="hapus_jadwal.php?kode=<?php echo $jadwal['kode_jaga'] ?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0/></a></td>
</tr>
<?php
}
?>  
 
 
</table>
