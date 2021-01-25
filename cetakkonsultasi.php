<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 18px;
}
-->
</style>

<text3D>
  <marquee>
    <p class="style2"><img src='file:///E|/Master/mowes_portable/www/PlanningD/SistemPakar/images/tbc4.gif' width='25' height='25'></img>Lebih Baik Mencegah Dari Pada Mengobati    </p>
    
    
  </marquee>
</text3D>

<p><img src='file:///E|/Master/mowes_portable/www/PlanningD/SistemPakar/images/tbc3.jpeg' width='200' height='200'></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if (isset($id_gejala))
{
	$pjg_array=count($id_gejala);
	for($k=0;$k<$pjg_array;$k++)
	{
		$ok=$ok+$id_gejala[$k];
	}
	$strsql_temuan="select * from master_penyakit where nilai_temuan='$ok'";
	$hasil_temuan=mysql_query($strsql_temuan);

	echo "</br>";
	echo "HASIL DIAGNOSIS SISTEM PAKAR MENGATAKAN, BAHWA ANDA TERSERANG PENYAKIT:";
	while($row_temuan=mysql_fetch_array($hasil_temuan))
	{
	echo "<table width='600' border='0'>
				<tr><b>$row_temuan[master_penyakit]</b><td>   </br><i> Definisi Penyakit: $row_temuan[definisi]</i> </br>  </br> Pengobatan: $row_temuan[solusi] <a href='cetakkonsultasi.php'> </br> </br> <b>Cetak Hasil Konsultasi</a></b> </td></tr>
				</table>";
	}
	
	
	
}
?>

