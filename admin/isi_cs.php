<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$kodecs = $_POST['kode_cs'];
$kode_ruangan = $_POST['kode_ruang'];
$nama_cs = $_POST['nama_cs'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

//query untuk mengupdate data tabel cleaning service
$insert = mysql_query("INSERT INTO cleaning_service (kode_clean_serv, kode_ruangan, nama_clean_serv, alamat_clean_serv, no_tlp) VALUES('$kodecs','$kode_ruangan','$nama_cs','$alamat','$no_tlp')");

if ($insert) {
//echo "Sukses Input Data";
?><script>document.location.href="lihat_cs.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
