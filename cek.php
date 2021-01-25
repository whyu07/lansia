<?php
	
	
		include "inc.koneksidb.php";
		
		$query = mysql_query("insert into data (pertanyaan, jawaban, nilai) values ('$_POST[pertanyaan]','$_POST[soal1]', '$_POST[nilai1]','$_POST[soal2]', '$_POST[nilai2]' ");

if($query){
		echo "Proses Registrasi Berhasil, Data anda sudah tersimpan";
		echo "<br>Silahkan <a href='index.php'>Login</a> disini";
	}else{
		echo "Registrasi Gagal";
		echo "<br>Silahkan <a href='index.php'>Registrasi Ulang</a> disini";
	}
	?>