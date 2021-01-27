<?php include "inc.koneksidb.php"; ?>


<title>Cetak Hasil Konsultasi</title>
<body onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <p><img src='images/header2.png' width='50%' height='70'></img></p>
    <p align="left" class="style2">&nbsp;</p>
   
  </div>
</div>
<p></img>

    <?php
    $kategori = mysql_query("SELECT * FROM master_penyakit WHERE id=3");
while ($k = mysql_fetch_array($kategori)){
echo "<b>HASIL DIAGNOSA SISTEM PAKAR MENGATAKAN ANDA TERDIAGNOSA GEJALA $k[master_penyakit] </b> <br><br><br>";
echo "Keterangan  : <br><br>"; 
echo "$k[definisi]<br><br>";
echo "Pengobatan  : <br><br>"; 
echo "$k[solusi]<br><br>";
}
?>
      <td width="389" rowspan="2"><div align="right"><img src="foto_galery/j.jpg" width="332" height='184' /></td>

<div align="left">
    <p><br/> 
    </p>
    
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";

?>

	
  </div>