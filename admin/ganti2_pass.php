<?php
include "../include/connect.php";

$pwd_lama = md5($_POST['pwd_lama']);
$pwd_baru = $_POST['pwd_baru'];
$confirm = $_POST['confirm'];

$query1 = mysql_query("SELECT password FROM receptionist WHERE password = '$pwd_lama'");
$kode = $_SESSION[username];
$lama = mysql_num_rows($query1);
echo mysql_error();

if ($lama==0){  ?>
<script>alert('Password Lama Salah!');document.location.href="ganti_pass.php"</script><?php 
}else if ($pwd_baru!=$confirm){
?>
<script>alert('Password Baru Tidak Cocok!');document.location.href="ganti_pass.php"</script><?php 
}else{
$update = mysql_query("UPDATE receptionist SET password = md5('$confirm') WHERE kode_receptionist='$kode'");
echo "<script>alert('Password Sudah Diubah ^_^')</script>";?><script>document.location.href="ganti_pass.php"</script><?php
}

?>
