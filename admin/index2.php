<?php
if(!isset($_SESSION)) {
     session_start();
}
if(isset($_SESSION['username'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.gif" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Rumah Sakit</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0501182410_0) return;
                            window.mm_menu_0501182410_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Pasien","location='?page=input_pasien'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Dokter","location='?page=input_dokter'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Perawat","location='?page=input_suster'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Jadwal&nbsp;Jaga","location='?page=input_jadwal'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Cleaning&nbsp;Service","location='?page=input_cs'");
   mm_menu_0501182410_0.hideOnMouseOut=true;
   mm_menu_0501182410_0.bgColor='#99FF00';
   mm_menu_0501182410_0.menuBorder=1;
   mm_menu_0501182410_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0501182410_0.menuBorderBgColor='#009933';
  window.mm_menu_0501191215_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Pasien","location='?page=lihat_pasien'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Dokter","location='?page=lihat_dokter'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Perawat","location='?page=lihat_suster'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Jadwal&nbsp;Jaga","location='?page=lihat_jadwal'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Cleaning&nbsp;Service","location='?page=lihat_cs'");
   mm_menu_0501191215_0.hideOnMouseOut=true;
   mm_menu_0501191215_0.bgColor='#99FF00';
   mm_menu_0501191215_0.menuBorder=1;
   mm_menu_0501191215_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0501191215_0.menuBorderBgColor='#009933';
  window.mm_menu_0501212441_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#009900","#00FF33","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501212441_0.addMenuItem("Profil&nbsp;Receptionist","location='?page=profil_recept'");
  mm_menu_0501212441_0.addMenuItem("Edit&nbsp;Profil","location='?page=edit_recept'");
  mm_menu_0501212441_0.addMenuItem("Ganti&nbsp;Password","location='?page=ganti_pass'");
   mm_menu_0501212441_0.hideOnMouseOut=true;
   mm_menu_0501212441_0.bgColor='#99FF00';
   mm_menu_0501212441_0.menuBorder=1;
   mm_menu_0501212441_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0501212441_0.menuBorderBgColor='#009933';

mm_menu_0501212441_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="main_bg">
  <div id="main">
    <!-- header begins -->
    <div id="header">
      <div id="logo">
        <h2>Sistem Informasi Rumah Sakit</h2>
        <h2>Sederhana</h2>
      </div>
      <div id="buttons"> <a href="/rs" class="but"  title="">Home</a> <a href="#" name="link5" title="" class="but" id="link1" onmouseover="MM_showMenu(window.mm_menu_0501182410_0,0,40,null,'link5')" onmouseout="MM_startTimeout();">Input Data </a> <a href="#" name="link7" title=""  class="but" id="link2" onmouseover="MM_showMenu(window.mm_menu_0501191215_0,0,40,null,'link7')" onmouseout="MM_startTimeout();">Lihat Data </a><a href="?page=profil_recept" name="link3" title=""  class="but" id="link4" onmouseover="MM_showMenu(window.mm_menu_0501212441_0,0,40,null,'link3')" onmouseout="MM_startTimeout();">Akun</a> <a href="../login/logout.php" onclick="return confirm('Anda Yakin Logout dari Sistem?')" class="but" title="">Logout</a> </div>
	   
    </div>
    <!-- header ends -->
	<div id="content"><marquee><h3><blink>SELAMAT DATANG RECEPTIONIST <?php include "../include/connect.php"; $recept = mysql_fetch_array(mysql_query("SELECT nama_receptionist FROM receptionist WHERE kode_receptionist=$_SESSION[username]")); $nama = strtoupper($recept['nama_receptionist']);echo "$nama"; ?>, SELAMAT MENJALANKAN TUGAS...</blink></h3></marquee></div>
    <!-- content begins -->
    <div id="content">
      <div id="left">
        <div class="left_box">
          <h1>Sistem Informasi Rumah Sakit </h1>
        <?php
  		include "content.php";
		?>
        </div>
      </div>
      <div style="clear: both"></div>
    </div>
    <!-- content ends -->
    <!-- footer begins -->
    <div id="footer">
      <!--<p>Copyright &copy; 2011  <a href="http://sekedar-tutorial.blogspot.com" target="_blank">Andi Sholihin</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
      <p>Design by <a href="http://www.metamorphozis.com/" title="Flash Templates">Flash Templates</a> for <a href="http://www.flashtemplatesdesign.com/" title="Free Flash Templates">Free Flash Templates</a></p>-->
    </div>
    <!-- footer ends -->
  </div>
</div>
</body>
</html>
<?php 
}else{
?>
<script>document.location.href="../login/"</script>
<?php 
}
?>
