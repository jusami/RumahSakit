<?php
include "../include/connect.php"; //sambung ke mysql

//query untuk mengambil data dokter ke mysql
$hasil = mysql_query("SELECT * FROM dokter ORDER BY kode_dokter");
?>
<div align="center"> <!-- Membuat Table untuk menampilkan data dokter-->
  <h2><u>Data Dokter Rumah Sakit </u></h2>
  <table width="747" border="1">
    <tr bgcolor="#33FF33"> <!-- <tr> = table rows -->
      <th width="71" scope="col">Kode Dokter </th> 
      <!-- <th> = table header -->
      <th width="165" scope="col">Nama Dokter </th>
      <th width="120" scope="col">Spesialis</th>
      <th width="161" scope="col">Alamat</th>
      <th width="137" scope="col">Telepon/HP </th>
      <th width="42" scope="col" colspan="2">Opsi</th>
    </tr>
<?php //perulangan untuk menampilkan data dalam beberapa baris
$warna = '';
while ($baris = mysql_fetch_array($hasil)){
include "../include/warna_tabel.php";
//<tr> = table rows
echo "
<tr bgcolor=$warna> 
<td>$baris[kode_dokter]</td>
<td>$baris[nama_dokter]</td>
<td>$baris[spesialis]</td>
<td>$baris[alamat_dokter]</td>
<td>$baris[no_tlp]</td>
<td><a href=update_dokter.php?kodedokter=$baris[kode_dokter]><img src=../icon/update.png border=0/></a></td> ";?>
<td><a href=hapus_dokter.php?kodedokter=<?php echo $baris['kode_dokter']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"><img src="../icon/hapus.png" border="0"/></a></td></tr>
<?php
}
?>
  </table>
</div>
