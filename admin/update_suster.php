<?php
include "../include/connect.php";//sambungkan ke mysql

$kode_suster = $_GET['kode'];

//mengambil nama-nama dokter dari tabel dokter
$query = mysql_query("SELECT nama_dokter FROM dokter");

//mengambil data dari tabel suster
$hasil = mysql_query("SELECT * FROM suster WHERE kode_suster = '$kode_suster'");
$suster = mysql_fetch_array($hasil);

//mengambil nama dokter awal
$querylagi = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = '$suster[kode_dokter]'");
$dokter_awal = mysql_fetch_array($querylagi);
?>

<h2 align="center"><u>Update Data Perawat</u></h2>
<table width="296" border="0" align="center">
<form name="postform" action="update2_suster.php" method="post" >
<input type="hidden" name="kode_suster" value=<?php echo $kode_suster ?> />
  <tr>
    <td width="102">Kode Perawat </td>
    <td width="9">:</td>
    <td width="138"><input type="text" name="kode" value="<?php echo $kode_suster ?>" disabled="disabled" size="8"/></td>
  </tr>
  <tr>
    <td>Nama Perawat </td>
    <td>:</td>
    <td><input type="text" name="nama_suster" value="<?php echo $suster['nama_suster']?>"/></td>
  </tr>
  <tr>
    <td>Alamat Suster </td>
    <td>:</td>
    <td><input type="text" name="alamat" value="<?php echo $suster['alamat_suster']?>"/></td>
  </tr>
  <tr>
    <td>No Telp. </td>
    <td>:</td>
    <td><input type="text" name="no_tlp" value="<?php echo $suster['no_tlp']?>"/></td>
  </tr>
  <tr>
    <td>Dokter</td>
    <td>:</td>
    <td><select name="dokter">
      <option selected="selected"><?php echo $dokter_awal['nama_dokter']?></option>
	  <?php //masukkan nama dokter ke dalam daftar
	  while($dokter = mysql_fetch_array($query)){
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
