<?php
include "../include/connect.php"; //sambungkan ke database
//query untuk mengambil data ke mysql
$hasil=mysql_query("select * from pasien order by kode_pasien");

?>

<div align="center"> <!-- tabel rata tengah -->
  <h2><u>Data Pasien Rumah Sakit</u></h2>
<!-- membuat tabel untuk menampilkan data -->
  <table width="939" border="1">
    <tr bgcolor="#33FF33"> <!-- <tr> = table rows -->
      <th width="48" scope="col">Kode Pasien </th> <!-- <th> = table header -->
      <th width="147" scope="col">Nama Pasien </th>
      <th width="102" scope="col">Tanggal Lahir </th>
      <th width="96" scope="col">Tempat Lahir </th>
      <th width="69" scope="col">Jenis Kelamin </th>
      <th width="105" scope="col">Alamat Pasien </th>
      <th width="30" scope="col">Usia</th>
      <th width="138" scope="col">Jenis Penyakit</th>
      <th width="89" scope="col">Rincian</th>
      <th width="70" scope="col" colspan="2">Opsi</th>
    </tr>
<?php //perulangan untuk menampilkan data dalam beberapa baris
$warna = "";
while ($baris = mysql_fetch_array($hasil)){
include "../include/warna_tabel.php";
//<tr> = table rows
echo "
<tr bgcolor=$warna>
<td>$baris[kode_pasien]</td>
<td>$baris[nama_pasien]</td>
<td>$baris[tanggal_lahir]</td>
<td>$baris[tempat_lahir]</td>
<td>$baris[jenis_kelamin]</td>
<td>$baris[alamat_pasien]</td>
<td>$baris[usia]</td>
<td>$baris[penyakit_diderita]</td>
<td><a href=rincian_pasien.php?kodepasien=$baris[kode_pasien]>Lihat Rincian</a></td>
<td><a href=update_pasien.php?kodepasien=$baris[kode_pasien]><img src=../icon/update.png border=0/></a></td>" ?>
<td><a href=hapus_pasien.php?kodepasien=<?php echo $baris['kode_pasien']?> onClick="return confirm('Apakah Anda Yakin Hapus data?')"><img src="../icon/hapus.png" border="0"/></a></td></tr>
<?php
}
?>	
  </table>
</div>
