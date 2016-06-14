<?php
include "../include/connect.php";

$kode_jaga = $_GET['kode'];

$query1 = mysql_query("SELECT nama_dokter FROM dokter");//mengambil daftar nama dokter
$query2 = mysql_query("SELECT nama_suster FROM suster");//mengambil daftar nama suster
$query3 = mysql_query("SELECT nama_receptionist FROM receptionist");//mengambil daftar nama receptionist

//mengambil data dari tabel jadwal_jaga
$query4 = mysql_query("SELECT * FROM jadwal_jaga WHERE kode_jaga = '$kode_jaga'"); 
$code =  mysql_fetch_array($query4);

//mengambil nama dokter
$query5 = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = '$code[kode_dokter]'");
$dokter = mysql_fetch_array($query5);

//mengambil nama suster
$query6 = mysql_query("SELECT nama_suster FROM suster WHERE kode_suster = '$code[kode_suster]'");
$suster = mysql_fetch_array($query6);

//mengambil nama resepsionis
$query7 = mysql_query("SELECT nama_receptionist FROM receptionist WHERE kode_receptionist = '$code[kode_receptionist]'");
$recept = mysql_fetch_array($query7);
?>

<h2 align="center"><u>Update Jadwal Jaga </u></h2>
<table width="297" border="0" align="center">
<form name="postform" method="post" action="update2_jadwal.php" >
<input type="hidden" name="kode_jaga" value="<?php echo $kode_jaga ?>"/>
  <tr>
    <td width="100">Kode Jaga </td>
    <td width="13">:</td>
    <td width="162"><input type="text" name="kode" value="<?php echo $kode_jaga ?>" disabled="disabled" size="10" /></td>
  </tr>
  <tr>
    <td>Waktu Siaga </td>
    <td>:</td>
    <td><input type="text" name="waktujaga" value="<?php echo $code['waktu_jaga'] ?>" /></td>
  </tr>
  <tr>
    <td>Dokter </td>
    <td>:</td>
    <td><select name="dokter">
      <option><?php echo $dokter['nama_dokter'] ?></option>
	  <?php while ($dokter = mysql_fetch_array($query1)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Perawat </td>
    <td>:</td>
    <td><select name="suster">
      <option><?php echo $suster['nama_suster']?></option>
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
      <option><?php echo $recept['nama_receptionist']?></option>
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
