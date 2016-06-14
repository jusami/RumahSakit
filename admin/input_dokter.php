<?php
include "../include/connect.php";//sambung ke mysql

//mengambil kode dokter terbesar dari table dokter
$query = mysql_query("SELECT MAX(kode_dokter) AS kode_dokter FROM dokter");
$dokter = mysql_fetch_array($query); //pecah data ke dalam array
$kodebaru = $dokter['kode_dokter']+1; //kode max ditambah 1 agar jadi kode baru
?>

<h2 align="center"><u>Input Data Dokter</u></h2>
<table width="283" border="0" align="center">
<form name="postform" action="isi_dokter.php" method="post">
  <tr>
    <td width="95">Kode Dokter </td>
    <td width="11">:</td>
    <td width="163"><input type="text" name="kode_dokter" value="<?php echo $kodebaru?>" size="15"/></td>
  </tr>
  <tr>
    <td>Nama Dokter </td>
    <td>:</td>
    <td><input type="text" name="nama_dokter" /></td>
  </tr>
  <tr>
    <td>Spesialis</td>
    <td>:</td>
    <td><input type="text" name="spesialis" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat_dokter" /></td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td>:</td>
    <td><input type="text" name="telepon"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Input Data" />
    </div></td>
  </tr>
</form>
</table>
