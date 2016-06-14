<?php
$page = '';
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
$file = "$page.php";


if(!file_exists($file) || empty($page)){ 
    include "../include/home.php"; 
  }else{ 
   echo "<iframe align=middle width=991 height=550 src=$file frameborder=0></iframe> "; 
}
?>
