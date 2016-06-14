<?php
include "../include/connect.php";

$query = mysql_query("SELECT * FROM receptionist WHERE kode_receptionist='$_SESSION[username]'");
$recept = mysql_fetch_array($query)
?>
<h2 align="center">Edit Profil Receptionist </h2>
<br />
<table width="323" border="0" align="center">
<form action="update2_recept.php" method="post" name="postform">
  <tr>
    <td width="125">Kode Receptionist </td>
    <td width="14">:</td>
    <td width="162"><input name="kode_recept" value="<?php echo $recept['kode_receptionist'] ?>" type="text" size="8" disabled="disabled" /></td>
  </tr>
  <tr>
    <td>Nama Receptionist </td>
    <td>:</td>
    <td><input name="nama_recept" value="<?php echo $recept['nama_receptionist'] ?>" type="text" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input name="alamat" type="text" value="<?php echo $recept['alamat_receptionist'] ?>"/></td>
  </tr>
  <tr>
    <td>HP</td>
    <td>:</td>
    <td><input name="no_tlp" type="text" value="<?php echo $recept['no_tlp'] ?>" /></td>
  </tr>
  <tr>
    <td height="38" colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Edit Profil Receptionist" />
    </div></td>
  </tr>
  </form>
</table>

