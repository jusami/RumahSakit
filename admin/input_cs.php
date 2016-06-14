<?php
include "../include/connect.php";//sambungkan ke mysql

//query untuk menampilkan kode ruangan dari tabel ruangan
$hasil = mysql_query("SELECT kode_ruangan FROM ruangan");

//query untuk mengambil data dari tabel cleaning service
$query = mysql_query("SELECT MAX(kode_clean_serv) AS kodecs FROM cleaning_service");
$cs = mysql_fetch_array($query);
$kode_cs = $cs['kodecs']+1;//ditambah 1 agar jadi kode_clean_serv baru
?>
<h2 align="center"><u>Input Data Cleaning Service </u></h2>
<table width="316" border="0" align="center">
<form name="postform" method="post" action="isi_cs.php">
  <tr>
    <td width="101">Kode CS </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_cs" size="10" value="<?php echo $kode_cs?>"/>

    </td>
  </tr>
  <tr>
    <td>Kode Ruangan </td>
    <td>:</td>
    <td><select name="kode_ruang">
	<option selected="selected">-Pilih-</option>
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
    <td><input type="text" name="nama_cs" size="20" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" size="25" /></td>
  </tr>
  <tr>
    <td>HP</td>
    <td>:</td>
    <td><input type="text" name="no_tlp" size="12" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
    </div></td>
  </tr>
</form>
</table>
