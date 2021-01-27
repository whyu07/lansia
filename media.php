<?php
session_start();
include "inc.koneksidb.php";
include"fungsi/fungsi_kalender.php";
?>
<html>
<title>.:: Welcome To Sistem Pakar   ::.</title>
<style type="text/css">
<!--
.style3 {font-family: "Comic Sans MS"; font-size: 12px; }
.style7 {
	font-family: "Comic Sans MS";
	font-size: 14px;
}
-->
</style>
<head>
<link rel="stylesheet" href="style/style.css "type="text/css"/> <!-- CSS untuk desain utama  -->
<link rel="stylesheet" href="style/style_tabel.css "type="text/css"/> <!-- CSS untuk desain tabel   -->
<link rel="stylesheet" href="style/nav.css">  <!-- CSS Menu   -->
<link type="text/css" rel="stylesheet" href="style/style_slider.css" /> <!-- CSS untuk gambar slider   -->

<link rel="stylesheet" type="text/css" href="css/layout.css" /> <!-- CSS untuk desain layout   -->
<link rel="stylesheet" type="text/css" href="css/style6.css" /> <!-- CSS untuk desain layout output untuk IE versi 6   -->
<script language="javascript" type="text/javascript" src="js_slider/jquery.js"></script> <!-- fungsi javascrip -->
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script> <!-- fungsi javascrip untuk slider -->
<script language="javascript" type="text/javascript" src="js/script.js"></script> <!-- fungsi javascrip -->
<script type='text/javascript' src='jquery.js'></script> <!-- fungsi javascrip -->
<script type="text/javascript" language="javascript" src="jscript.js"></script> <!-- fungsi javascrip -->

<script type="text/javascript" src="js_slider/jquery.js"></script> <!-- fungsi javascrip -->
<script type="text/javascript" src="js_slider/slides.min.jquery.js"></script> <!-- fungsi javascrip -->
<script type="text/javascript">
$(function(){
	$('#slider').slides({
		preload: true,
		preloadImage: 'img/loading.gif',
		play: 4000,
		pause: 2500,
		auto: 2000,
		hoverPause: true,
		animationComplete: function(current){
			$('.caption').animate({
				bottom:0
			},200);
		},
		slidesLoaded: function() {
			$('.caption').animate({
				bottom:0
			},200);
		}
	});
});
</script>

<head>
<body>
<div id="wrapper">
<!-----------------#header-------------->
<div id="header">
<img src='images/logo.jpeg' width='1300' height='70'></div>
<!------------------#Menu--------------->
<nav id="topNav">
        	<ul>
            	<li><a href="./" ><img src="images/home.png" width='15' height='15' > Home</a></li>
          		<li><a href="./media.php?page=gejala" title=""><img src="images/sub.png" width='15' height='15' > &nbsp;Info Penyakit</a>
                	<ul>
                    	
                        <li><a href="./media.php?page=adhd" title="">&nbsp;&nbsp;&nbsp;<img src="images/sub.png" width='15' height='15' > &nbsp;ADHD </a></li>
						
                        <li><a href="./media.php?page=autisme" title="">&nbsp;&nbsp;&nbsp;<img src="images/sub.png" width='15' height='15' > &nbsp;Autisme</a></li>
						<li><a href="./media.php?page=odd" title="">&nbsp;&nbsp;&nbsp;<img src="images/sub.png" width='15' height='15' > &nbsp;ODD</a></li>
						<li><a href="./media.php?page=cd" title="">&nbsp;&nbsp;&nbsp;<img src="images/sub.png" width='15' height='15' > &nbsp;CD</a></li>
                    </ul>        
                </li>
			 	
              <?
			  if(empty($_SESSION[id_acount])){
			  ?>
			  
		<li><a href="./media.php?page=registrasi"  ><img src="images/profile.png" width='15' height='15' > Konsultasi</a></li>
<li><a href="./media.php?page=petunjuk"  ><img src="images/t.png" width='15' height='15' > Petunjuk</a></li>
<li><a href="./media.php?page=login"  ><img src="images/login.png" width='15' height='15' > Login</a></li>
            

<?
			  }else{
			  ?>
			
                    	<li><a href="logout.php" title="">&nbsp;&nbsp;&nbsp;<img src="images/logout.png" width='15' height='15' > &nbsp;Log Out</a></li>
                            
              
			  <?
			  }
			  ?>
		  </ul>
</nav>
<!------------------#Sidebar--------------->

<!------------------#Content--------------->
<div id="content">
<table id='theList' border="0" align="center" cellpadding="0" cellspacing="0">   
    <tr >    
    <td width="100%" class='td'  valign="top"  >
<div id="content-left">
<?php include "slide.php";?>

<?
$page=$_GET[page];
if($page=='home'){
	if(empty($_SESSION[id_acount])){
	include"home.php";
	}else{
	include"home.php";
	}
}
else if($page=='sejarah'){
include"sejarah.php";
}
else if($page=='daftarsim'){
include"PasienAddSim.php";
}
else if($page=='registrasi'){
include"PasienAddFm.php";
}
else if($page=='sejarah'){
include"sejarah.php";
}
else if($page=='gejala'){
include"gejala.php";
}
else if($page=='konsultasiFm'){
include"tanya.php";
}
else if($page=='download'){
include"download.php";
}
else if($page=='edit_akun'){
include"modul/mod_registrasi/edit_akun.php";
}
else if($page=='autisme'){
include"autisme.php";
}
else if($page=='odd'){
	include"odd.php";
}
else if($page=='cd'){
include"cd.php";
}
else if($page=='status'){
include"status.php";
}
else if($page=='petunjuk'){
include"petunjuk.php";
}
else if($page=='kontak'){
include"kontak.php";
}
else if($page=='tunjuk'){
include"tunjuk.php";
}
else if($page=='cekkonsultasi'){
include"cekkonsul.php";
}
else if($page=='adhd'){
include"adhd.php";
}
else if($page=='login'){
include"formlogin.php";
}
else if($page=='datapakar'){
include"datapakar.php";
}

?>
</div>
 </td>
 <td width="130" class='td' valign="top"  >
 <div id="Sidebar">
<?
if(empty($_SESSION[id_acount])){}else{
?>
 <div id='judul_header'>
 <table border='0'>
 <tr>
 <td width='200'>
 Hy, <?echo$_SESSION[namalengkap];?> <p align='right'>
 </td>
 <td>
 <img src='images/online.ico' width='25' height='25'></p>
 </td>
 </tr>
 </table>
 </div>
 <br>
 <?}?>
 

 <div id='judul_header'>&#187; Kalender</div>
  <div class='agenda'> 
  <?php 
  $tgl_skrg=date("d");
  $bln_skrg=date("n");
  $thn_skrg=date("Y");
  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
  ?>    
  </div>
  
<br>

</div>
  </td>
  </tr> 
    </table>
</div>
<!------------------#Footer--------------->
<div id="footer">
</div>
</div>

</body>
        <script src="javascript/modernizr.js"></script>
		<script>
			(function($){
				
				//cache nav
				var nav = $("#topNav");
				
				//add indicator and hovers to submenu parents
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));

						//show subnav on hover
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						
						//hide submenus on exit
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			})(jQuery);
		</script>
		
</html>
<?
if($_GET[savestatus]=='ok'){
$waktu = date("H:i d M Y");
if(empty($_POST[status]) or $_POST[status]=='Apa Yang Anda Pikirkan ?'){}
else{
mysql_query("INSERT INTO status(id_acount,status,waktu)VALUES('$_SESSION[id_acount]','$_POST[status]','$waktu')");
echo"<meta http-equiv='refresh' content='0;URL=./'>";
}
}

if($_GET[page]=='home' and $_GET[update]=='ok'){
$waktu = date("H:i d M Y");
if(empty($_POST[status]) or $_POST[status]=='Apa Yang Anda Pikirkan ?'){echo"<meta http-equiv='refresh' content='0;URL=./?page=home'>";}
else{
mysql_query("INSERT INTO status(id_acount,status,waktu)VALUES('$_SESSION[id_acount]','$_POST[status]','$waktu')");
echo"<meta http-equiv='refresh' content='0;URL=./?page=home'>";
}
}

if($_GET[page]=='home'  and $_GET[del]=='this'){

mysql_query("delete from status where id_status='$_GET[id]' ");
echo"<meta http-equiv='refresh' content='0;URL=./?page=home'>";
}
if( $_GET[page]=='status' and $_GET[del]=='this'){

mysql_query("delete from status where id_status='$_GET[id]' ");
echo"<meta http-equiv='refresh' content='0;URL=./?page=status'>";
}

?>
