<?php 
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtNama 	= $_REQUEST['TxtNama'];
$RbKelamin 	= $_REQUEST['RbKelamin'];
$TxtAlamat 	= $_REQUEST['TxtAlamat'];
$TxtUmur= $_REQUEST['TxtUmur'];
$TxtOrangTua= $_REQUEST['TxtOrangTua'];

# Validasi Form
if (trim($TxtNama)=="") {
	include "PasienAddFm.php";
	echo "Nama belum diisi, ulangi kembali";
	echo "<script>alert('Nama belum diisi , Silahkan ulangi kembali');window.location='media.php?page=registrasi'</script>";
}
elseif (trim($RbKelamin)=="") {
	include "PasienAddFm.php";
	echo "Jenis Kelamin masih kosong, ulangi kembali";
	echo "<script>alert('JK masih kosong, Silahkan ulangi kembali');window.location='media.php?page=registrasi'</script>";
}
elseif (trim($TxtAlamat)=="") {
	include "PasienAddFm.php";
	echo "Alamat masih kosong, ulangi kembali";
	echo "<script>alert('Alamat masih kosong, Silahkan ulangi kembali');window.location='media.php?page=registrasi'</script>";
}
elseif (trim($TxtUmur)=="") {
	include "PasienAddFm.php";
	echo "Umur masih kosong, ulangi kembali";
	echo "<script>alert('Umur masih kosong, Silahkan ulangi kembali');window.location='media.php?page=registrasi'</script>";
}
elseif (trim($TxtOrangTua)=="") {
	include "PasienAddFm.php";
	echo "Orang Tua masih kosong, ulangi kembali";
	echo "<script>alert('Orang Tua masih kosong, Silahkan ulangi kembali');window.location='media.php?page=registrasi'</script>";
}
else {
	
	
	$sql  = mysql_query( " INSERT INTO user (nama,jk,alamat,pekerjaan,keterangan,tanggal) 
		 	  VALUES ('$TxtNama','$RbKelamin','$TxtAlamat','$TxtUmur','$TxtOrangTua',NOW())");

	
	echo "<meta http-equiv='refresh' content='0; url=media.php?page=konsultasiFm'>";
}
?>
