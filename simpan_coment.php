
<?php
	
	
		include "fungsi/koneksi.php";	
		$nama = $_POST['txtnama'];
	$email = $_POST['txtemail'];
	$telp = $_POST['txttelp'];
	$coment = $_POST['txtcoment'];
	
		
		
		$query = mysql_query("insert into pesan (nama, email, telp,  coment) values ('$nama', '$email', '$telp', '$coment')");

if($query){
		
		echo "<meta http-equiv='refresh' content='0; url=./media.php?page=kontak'>";
		
	}else{
		echo "Registrasi Gagal";
		echo "<br>Silahkan <a href='index.php'>Registrasi Ulang</a> disini";
	}
	?>