<?php
include "../include/connect.php";//sambung ke mysql
$kode_pasien = $_GET['kodepasien'];//mengambil nilai kode pasien

//menghapus Record di tabel pasien
$hasil = mysql_query("DELETE FROM pasien WHERE kode_pasien = '$kode_pasien'");

//menghapus record di tabel tgl_masuk
$hasil2 = mysql_query("DELETE FROM tgl_masuk WHERE kode_pasien = '$kode_pasien'");

//menghapus record di tabel ruangan
$hasil3 = mysql_query("DELETE FROM ruangan WHERE kode_pasien = '$kode_pasien'");

if ($hasil && $hasil2 && $hasil3){
//echo "sukses";
?><script>document.location.href="lihat_pasien.php"</script><?php
} 
else
{
echo "gagal karena : ".mysql_error();
}
?>
