<?php
include "../include/connect.php";//sambungkan ke mysql

$kode_pasien = $_GET['kodepasien'];//mengambil nilai kode pasien dari address bar

//mengambil data dari table pasien yg sesuai dengan pilihan user
$hasil = mysql_query("SELECT * FROM pasien WHERE kode_pasien = $kode_pasien");
 
//mengambil data dari table ruangan yg sesuai dengan pilihan user
$hasil2 = mysql_query("SELECT * FROM ruangan WHERE kode_pasien = '$kode_pasien'");

////mengambil data dari table tgl_masuk yg sesuai dengan pilihan user
$hasil3 = mysql_query("SELECT tgl_masuk FROM tgl_masuk WHERE kode_pasien = '$kode_pasien'");

//mengambil data kode ruangan dari database
$ruang = mysql_query("SELECT kode_ruangan FROM ruangan"); 

//memecah hasil query ke dalam array
$baris = mysql_fetch_array($hasil); //array dari tabel pasien
$baris2 = mysql_fetch_array($hasil2); //array dari tabel ruangan
$baris3 = mysql_fetch_array($hasil3); //array dari tabel tgl_masuk
echo mysql_error(); //tampilkan instruksi jika terjadi error
?>
<div align="center">
  <h2><u>Update Data Pasien </u></h2>
  <table width="504" height="355" border="0">
  <form id="form1" name="postform" method="post" action="update2_pasien.php">
  <input name="kode_ps_lama" type="hidden" value="<?php echo $baris['kode_pasien']?>"/>
    <tr>
      <td width="137">Kode Pasien </td>
      <td width="10">:</td>
      <td width="343">
        <input name="kode_pasien" type="text" disabled="disabled" size="10" value="<?php echo $baris['kode_pasien']?>"/>      </td>
   <tr>
      <td>Tanggal Masuk </td>
      <td>:</td>
      <td><input name="tgl_masuk" type="text" value="<?php echo $baris3['tgl_masuk']?>"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_masuk);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
    </tr>
    <tr>
      <td>Nama Pasien </td>
      <td>:</td>
      <td><input name="nama_pasien" type="text" value="<?php echo $baris['nama_pasien']?>" size="35" /></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td>:</td>
      <td><input name="tgl_lahir" type="text" value="<?php echo $baris['tanggal_lahir']?>"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_lahir);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
    </tr>
    <tr>
      <td>Tempat Lahir </td>
      <td>:</td>
      <td><input name="tempat_lahir" type="text" value="<?php echo $baris['tempat_lahir']?>"/></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td><select name="jenis_kelamin">
        <option selected="selected"><?php echo $baris['jenis_kelamin']?></option>
		<option>Laki-laki</>
        <option>Perempuan</option>
      </select></td>
    </tr>
    <tr>
      <td>Alamat Pasien </td>
      <td>:</td>
      <td><input name="alamat" type="text" size="35" value="<?php echo $baris['alamat_pasien']?>"/></td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>:</td>
      <td><select name="usia">
	  <option selected="selected"><?php echo $baris['usia']?></option>
	  <?php for($i=1;$i<=120;$i++){
	  echo "<option>$i</option>";
	  } ?></td>
    </tr>
    <tr>
        <td>Kode Ruangan</td>
        <td>:</td>
        <td><input name="ruangan" type="text" value="<?php echo $baris2['kode_ruangan']?>" size="10"/>   Jenis : 
          <select name="jenis_ruangan">
            <option selected="selected"><?php echo $baris2['jenis_ruangan']?></option>
            <option>Umum</option>
            <option>Anak-anak</option>
            <option>Penyakit Dalam</option>
            <option>Kandungan</option>
          </select>        </td>
      </tr>
      <tr>
        <td>Nama Ruangan </td>
        <td>&nbsp;</td>
        <td><input type="text" name="nama_ruangan" value="<?php echo $baris2['nama_ruangan']?>" size="10"/> 
         No Ranjang : 
           <select name="no_ranjang">
             <option selected="selected"><?php echo $baris2['no_ranjang']?></option>
			 <?php for ($i=1;$i<=85;$i++)
			 {echo "<option>$i</option>";}
			 ?>
           </select>
         </td>
      </tr>
    <tr>
      <td>Penyakit yang diderita </td>
      <td>:</td>
      <td><input type="text" name="penyakit" value="<?php echo $baris['penyakit_diderita']?>"/></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input name="Submit" type="submit" value="Update Data" />
        <input type="reset" name="reset" value="Reset" />
      </div></td>
      </tr>
	</form>
  </table>
  <!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</div>
