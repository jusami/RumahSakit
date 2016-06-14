<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$kodecs = $_POST['kodecs'];
$kode_ruangan = $_POST['kode_ruang'];
$nama_cs = $_POST['nama_cs'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

//query untuk mengupdate data tabel cleaning service
$update = mysql_query("UPDATE cleaning_service SET kode_ruangan = '$kode_ruangan', nama_clean_serv = '$nama_cs', alamat_clean_serv = '$alamat', no_tlp = '$no_tlp' WHERE kode_clean_serv = '$kodecs'");

if ($update) {
//echo "sukses update";
?><script>document.location.href="lihat_cs.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
