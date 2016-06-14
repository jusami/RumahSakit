<?php
include "../include/connect.php";//sambung ke mysql

//mengambil nilai dari form
$kode_dokter = $_POST['kode_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat_dokter'];
$no_tlp = $_POST['telepon'];

//query update data tabel dokter
$update = mysql_query("UPDATE dokter SET nama_dokter = '$nama_dokter', spesialis = '$spesialis', alamat_dokter = '$alamat', no_tlp = '$no_tlp' WHERE kode_dokter = '$kode_dokter'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="lihat_dokter.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>
