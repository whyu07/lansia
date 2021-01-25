<?php
	
	
		include "fungsi/koneksi.php";	
		$nama=$_REQUEST['nama'];
		$jk=$_REQUEST['jk'];
		$alamat=$_REQUEST['alamat'];
		$pekerjaan=$_REQUEST['pekerjaan'];
		$keterangan=$_REQUEST['keterangan'];
		
		
		$query = mysql_query("insert into user (nama, jk, alamat, pekerjaan, keterangan,  tanggal) values ('$nama', '$jk', '$alamat','$pekerjaan','$keterangan', NOW())");

if($query){
		
		echo "<meta http-equiv='refresh' content='0; url=./media.php?page=konsultasiFm'>";
		
	}else{
		echo "Registrasi Gagal";
		echo "<br>Silahkan <a href='index.php'>Registrasi Ulang</a> disini";
	}
	?>