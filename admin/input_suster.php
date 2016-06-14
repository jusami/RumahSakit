<?php
include "../include/connect.php";//sambung ke mysql

//mengambil nama-nama dokter dari tabel dokter
$hasil = mysql_query("SELECT nama_dokter FROM dokter");

//menambil nilai maks dari tabel suster
$query = mysql_query("SELECT MAX(kode_suster) AS kode_suster FROM suster");
$kode = mysql_fetch_array($query);
$kode_suster = $kode['kode_suster']+1;
?>

<h2 align="center"><u>Input Data Perawat</u></h2>
<table width="296" border="0" align="center">
<form name="postform" action="isi_suster.php" method="post" >
<input type="hidden" name="kode_suster" value=<?php echo $kode_suster ?> />
  <tr>
    <td width="102">Kode Suster </td>
    <td width="9">:</td>
    <td width="138"><input type="text" name="kode" value="<?php echo $kode_suster ?>" disabled="disabled" size="8"/></td>
  </tr>
  <tr>
    <td>Nama Perawat </td>
    <td>:</td>
    <td><input type="text" name="nama_suster" /></td>
  </tr>
  <tr>
    <td>Alamat Perawat </td>
    <td>:</td>
    <td><input type="text" name="alamat" /></td>
  </tr>
  <tr>
    <td>No Telp. </td>
    <td>:</td>
    <td><input type="text" name="no_tlp" /></td>
  </tr>
  <tr>
    <td>Dokter</td>
    <td>:</td>
    <td><select name="dokter">
      <option selected="selected">-Pilih Dokter-</option>
	  <?php //masukkan nama dokter ke dalam daftar
	  while($dokter = mysql_fetch_array($hasil)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }
	  ?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Input Data" />
      <input type="reset" name="Reset" value="Reset" />
    </div></td>
  </tr>
 </form>
</table>
