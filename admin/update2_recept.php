<?php
include "../include/connect.php";

//mengambil data dari form

$kode = $_SESSION[username];
$nama = $_POST[nama_recept];
$alamat = $_POST[alamat];
$hp = $_POST[no_tlp];

$update = mysql_query("UPDATE receptionist SET nama_receptionist = '$nama', alamat_receptionist = '$alamat', no_tlp = '$hp' WHERE kode_receptionist = '$kode'");

if($update){
//echo "sukses";
?><script>document.location.href="profil_recept.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}

?>