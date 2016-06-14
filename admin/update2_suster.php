<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form inputan
$kode_suster = $_POST['kode_suster'];
$nama_suster = $_POST['nama_suster'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$dokter = $_POST['dokter'];

//echo "$kode_suster, $nama_suster, $alamat, $no_tlp, $dokter";

//mengambil kode dokter untuk dimasukkan ke dalam tabel suster
$query1 = mysql_query("SELECT kode_dokter FROM dokter WHERE nama_dokter = '$dokter'");
$kode_dokter = mysql_fetch_array($query1);

//query update data suster
$update = mysql_query("UPDATE suster SET kode_dokter = '$kode_dokter[kode_dokter]', nama_suster = '$nama_suster', alamat_suster = '$alamat', no_tlp = '$no_tlp' WHERE kode_suster = $kode_suster");

if ($update){
//echo "Sukses update data";
?><script>document.location.href="lihat_suster.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
