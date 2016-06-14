<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil nilai kode dari address bar
$kode_suster = $_GET['kode'];

//Query untuk menghapus data suster
$query = mysql_query("DELETE FROM suster WHERE kode_suster = '$kode_suster'");

if ($query){
?>
<script>document.location.href="lihat_suster.php"</script>
<?php
}else{
echo "gagal : ".mysql_error();
}
?>
