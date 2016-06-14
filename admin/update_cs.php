<?php
include "../include/connect.php";//sambungkan ke mysql

$kodecs = $_GET['kode'];//mengambil nilai kode dari address bar

//query untuk menampilkan kode ruangan dari tabel ruangan
$hasil = mysql_query("SELECT kode_ruangan FROM ruangan");

//query untuk mengambil data dari tabel cleaning service
$query = mysql_query("SELECT * FROM cleaning_service WHERE kode_clean_serv = '$kodecs'");
$cs = mysql_fetch_array($query);
?>
<h2 align="center"><u>Update Data Cleaning Service </u></h2>
<table width="316" border="0" align="center">
<form name="postform" method="post" action="update2_cs.php">
<input type="hidden" name="kodecs" value="<?php echo $kodecs?>"/>
  <tr>
    <td width="101">Kode CS </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_cs" size="10" value="<?php echo $kodecs ?>" disabled="disabled"/>

    </td>
  </tr>
  <tr>
    <td>Kode Ruangan </td>
    <td>:</td>
    <td><select name="kode_ruang">
	<option selected="selected"><?php echo $cs['kode_ruangan']?></option>
	<?php 
	while ($koderuang = mysql_fetch_array($hasil)){
	echo "<option>$koderuang[kode_ruangan]</option>";
	}	
	?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama_cs" size="20" value="<?php echo $cs['nama_clean_serv']?>"/></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" size="25" value="<?php echo $cs['alamat_clean_serv']?>"/></td>
  </tr>
  <tr>
    <td>HP</td>
    <td>:</td>
    <td><input type="text" name="no_tlp" size="12" value="<?php echo $cs['no_tlp']?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Update Data" />
    </div></td>
  </tr>
</form>
</table>
