<?php
include "../include/connect.php";//sambungkan ke mysql

$kode_dokter = $_GET['kodedokter'];//mengambil kode dokter dari addressbar

//query untuk mengambil data dari table dokter
$query = mysql_query("SELECT * FROM dokter WHERE kode_dokter = '$kode_dokter'");
$dokter = mysql_fetch_array($query);//memecah hasil query ke dalam array
?>

<h2 align="center"><u>Update Data Dokter</u></h2>
<table width="283" border="0" align="center">
<form name="postform" action="update2_dokter.php" method="post">
<input type="hidden" name="kode_dokter" value="<?php echo $dokter['kode_dokter']?>"/>
  <tr>
    <td width="95">Kode Dokter </td>
    <td width="11">:</td>
    <td width="163"><input type="text" name="kode_dokter" value="<?php echo $dokter['kode_dokter']?>" disabled="disabled" size="15"/></td>
  </tr>
  <tr>
    <td>Nama Dokter </td>
    <td>:</td>
    <td><input type="text" name="nama_dokter" value="<?php echo $dokter['nama_dokter']?>"/></td>
  </tr>
  <tr>
    <td>Spesialis</td>
    <td>:</td>
    <td><input type="text" name="spesialis" value="<?php echo $dokter['spesialis']?>"/></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat_dokter" value="<?php echo $dokter['alamat_dokter']?>"/></td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td>:</td>
    <td><input type="text" name="telepon" value="<?php echo $dokter['no_tlp']?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Update Data" />
    </div></td>
  </tr>
</form>
</table>
