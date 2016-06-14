<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form
$kode_dokter = $_POST['kode_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$alamat_dokter = $_POST['alamat_dokter'];
$no_tlp = $_POST['telepon'];

$query = mysql_query("INSERT INTO dokter (kode_dokter, nama_dokter, spesialis, alamat_dokter, no_tlp) VALUES('$kode_dokter', '$nama_dokter', '$spesialis', '$alamat_dokter', '$no_tlp')");

if ($query){
//echo "sukses";
?><script>document.location.href="lihat_dokter.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>
