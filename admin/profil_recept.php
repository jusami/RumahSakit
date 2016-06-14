<?php
include "../include/connect.php";

$query = mysql_query("SELECT * FROM receptionist WHERE kode_receptionist='$_SESSION[username]'");
$recept = mysql_fetch_array($query)
?>
<h2 align="center">Profil Receptionist 
</h2><br />
<table width="323" border="0" align="center">
  <tr>
    <td width="125">Kode Receptionist </td>
    <td width="14">:</td>
    <td width="162"><?php echo $recept['kode_receptionist'] ?></td>
  </tr>
  <tr>
    <td>Nama Receptionist </td>
    <td>:</td>
    <td><?php echo $recept['nama_receptionist'] ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $recept['alamat_receptionist'] ?></td>
  </tr>
  <tr>
    <td>HP</td>
    <td>:</td>
    <td><?php echo $recept['no_tlp'] ?></td>
  </tr>
  <tr>
    <td height="38" colspan="3">&nbsp;</td>
  </tr>
</table>
