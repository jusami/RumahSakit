<?php
include "../include/connect.php";//sambung ke mysql

$kode_dokter = $_GET['kodedokter'];//mengambil kodedokter dari address bar

//query untuk menghapus data
$query_hapus = mysql_query("DELETE FROM dokter WHERE kode_dokter = '$kode_dokter'");

if ($query_hapus){//jika berhasil
//echo "Dokter Berhasil dihapus";
?><script>document.location.href="lihat_dokter.php"</script><?php
}else{//jika  gagal menghapus
echo "Gagal : ".mysql_error();
}
?>
