<?php
include "../include/connect.php";

$query1 = mysql_query("SELECT nama_dokter FROM dokter");//mengambil nama dokter
$query2 = mysql_query("SELECT nama_suster FROM suster");//mengambil nama suster
$query3 = mysql_query("SELECT nama_receptionist FROM receptionist");//mengambil nama receptionist

//mengambil kode_jaga dari 
$ambil = mysql_query("SELECT MAX(kode_jaga) AS kode_jaga FROM jadwal_jaga");
$kode = mysql_fetch_array($ambil);
$kode_jaga = $kode['kode_jaga']+1;
?>

<h2 align="center"><u>Input Jadwal Jaga </u></h2>
<table width="297" border="0" align="center">
<form name="postform" method="post" action="isi_jadwal.php" >
<input type="hidden" name="kode_jaga" value="<?php echo $kode_jaga ?>"/>
  <tr>
    <td width="100">Kode Jaga </td>
    <td width="13">:</td>
    <td width="162"><input type="text" name="kode" value="<?php echo $kode_jaga ?>" disabled="disabled" size="10" /></td>
  </tr>
  <tr>
    <td>Waktu Siaga </td>
    <td>:</td>
    <td><input type="text" name="waktujaga" /></td>
  </tr>
  <tr>
    <td>Dokter </td>
    <td>:</td>
    <td><select name="dokter">
      <option>-Pilih Dokter-</option>
	  <?php while ($dokter = mysql_fetch_array($query1)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Suster </td>
    <td>:</td>
    <td><select name="suster">
      <option>-Pilih Suster-</option>
	  <?php while ($suster = mysql_fetch_array($query2)){
	  echo "<option>$suster[nama_suster]</option>";
	  } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Receptionist</td>
    <td>:</td>
    <td><select name="receptionist">
      <option>-Pilih Receptionist-</option>
	  <?php while ($recept = mysql_fetch_array($query3)){
	  echo "<option>$recept[nama_receptionist]</option>";
	  }?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Jadwal" />
    </div></td>
  </tr>
  </form>
</table>
