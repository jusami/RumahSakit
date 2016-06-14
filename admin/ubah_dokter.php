<?php
include "../include/connect.php";//sambungkan ke mysql

$kode_pasien=$_GET['kodepasien'];//mengambil kodepasien dari address bar

//query untuk mengambil data dari tabel pasien
$hasil = mysql_query("SELECT * FROM pasien WHERE kode_pasien='$kode_pasien'");
$pasien = mysql_fetch_array($hasil);

//mengambil nama dokter yang menangani pasien sebelum akan diubah
$query = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter IN (SELECT kode_dokter FROM tgl_masuk WHERE kode_pasien = '$kode_pasien')");
$dokter_awal = mysql_fetch_array($query);

//mengambil daftar nama dokter
$hasil2 = mysql_query("SELECT nama_dokter FROM dokter");
$dokter = mysql_fetch_array($hasil2);
?>
<form name="ubah_dokter" method="post" action="ubah2_dokter.php">
  <h2 align="center"><u>Ubah Dokter yang Menangani Pasien </u></h2>
  <table width="314" border="0" align="center">
  <tr>
    <td width="144">Kode Pasien </td>
    <td width="5">:</td>
    <td width="151"><?php echo $pasien['kode_pasien']?></td>
  </tr>
  <tr>
    <td>Nama Pasien </td>
    <td>:</td>
    <td><?php echo $pasien['nama_pasien']?></td>
  </tr>
  <tr>
    <td>Penyakit yg Diderita </td>
    <td>:</td>
    <td><?php echo $pasien['penyakit_diderita']?></td>
  </tr>
  <tr>
    <td>Nama Dokter </td>
    <td>:</td>
    <td><select name="nama_dokter">
      <option selected="selected"><?php echo $dokter_awal['nama_dokter']?></option>
	  <?php 
	  while ($dokter = mysql_fetch_array($hasil2)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td colspan="3">
	<input name="kode_pasien" type="hidden" value="<?php echo $kode_pasien?>"/>
      <div align="center">
        <input type="submit" name="Submit" value="Ubah Dokter" />
        </div>
  
    </td>
  </tr>
</table>
</form>
