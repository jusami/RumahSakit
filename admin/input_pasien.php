<?php
include "../include/connect.php";//sambungkan ke mysql

//query untuk menampilkan kode pasien terakhir

//mengambil nilai kode pasien tertinggi dari tabel pasien
$hasil = mysql_query("SELECT MAX(kode_pasien) AS kode FROM pasien");

$maks = mysql_fetch_array($hasil); //memecah hasil ke dalam array

$kodepasien = $maks['kode']+1; //kode_pasien ditambah 1 agar kode_pasien baru terinput otomatis

//mengambil nilai max dari tabel rawat_inap untuk dimasukkan ke tabel pembayaran
$query= mysql_query("SELECT MAX(kode_inap) AS kode_inap FROM rawat_inap");
$inap= mysql_fetch_array($query);
$kode_inap_baru = $inap['kode_inap']+1;

//mengambil data max dari tabel ruangan untuk dimasukkan secara otomatis ke form
$query2 = mysql_query("SELECT MAX(kode_ruangan) AS kode_ruang FROM ruangan");
$ruang = mysql_fetch_array($query2);
$kode_ruangan_baru = $ruang['kode_ruang']+1;
?>

<div align="center">
  <h2><u>Input Data Pasien </u></h2><br />
  <table width="621" height="355" border="0">
    <form id="form1" name="postform" method="post" action="isi_pasien.php">
      <input name="kode_inap" type="hidden" value="$kode_inap_baru"/>
	  <tr>
        <td width="143">Kode Pasien </td>
        <td width="8">:</td>
        <td width="456">  <!--kode pasien terinput otomatis dari sistem -->
            <input name="kode_pasien" type="text" value="<?php echo $kodepasien ?>"/></td>
      </tr>
      <tr>
        <td>Tanggal Masuk </td>
        <td>:</td>
        <td><input name="tgl_masuk" type="text" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_masuk);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
      </tr>
      <tr>
        <td>Nama Pasien </td>
        <td>:</td>
        <td><input name="nama_pasien" type="text"  size="35" /></td>
      </tr>
      <tr>
        <td>Tanggal Lahir </td>
        <td>:</td>
        <td><input name="tgl_lahir" type="text" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_lahir);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
      </tr>
      <tr>
        <td>Tempat Lahir </td>
        <td>:</td>
        <td><input name="tempat_lahir" type="text" /></td>
      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td>:</td>
        <td><select name="jenis_kelamin" >
            <option selected="selected">Laki-laki</option>
            <option>Perempuan</option>
        </select></td>
      </tr>
      <tr>
        <td>Alamat Pasien </td>
        <td>:</td>
        <td><input name="alamat" type="text" size="35" /></td>
      </tr>
      <tr>
        <td>Usia</td>
        <td>:</td>
        <td><select name="usia">
            <?php for($i=1;$i<=120;$i++){
	  echo "<option>$i</option>";
	  } ?>
          </select>        </td>
      </tr>
      <tr>
        <td>Kode Ruangan</td>
        <td>:</td>
        <td><input name="ruangan" type="text" value="<?php echo $kode_ruangan_baru?>" size="10"/>   Jenis : 
          <select name="jenis_ruangan">
            <option selected="selected">-Pilih-</option>
            <option>Umum</option>
            <option>Anak-anak</option>
            <option>Penyakit Dalam</option>
            <option>Kandungan</option>
          </select>        </td>
      </tr>
      <tr>
        <td>Nama Ruangan </td>
        <td>&nbsp;</td>
        <td><input type="text" name="nama_ruangan" size="10"/> 
         No Ranjang : 
           <select name="no_ranjang">
             <option selected="selected">-Pilih-</option>
			 <?php for ($i=1;$i<=85;$i++)
			 {echo "<option>$i</option>";}
			 ?>
           </select>
         </td>
      </tr>
      <tr>
        <td>Penyakit yang diderita </td>
        <td>:</td>
        <td><input type="text" name="penyakit" /></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
            <input name="Submit" type="submit" value="Input Data" />
            <input type="reset" name="reset" value="Reset" />
        </div></td>
      </tr>
    </form>
  </table>
  <!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</div>
