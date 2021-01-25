<?php
include "inc.koneksidb.php";
?>
<html>
<head>
<title>Form Masukan Data Pasien</title>
</head>
<body>
<form action="media.php?page=daftarsim" method="post" name="form1" target="_self">
	<table width="400" border="0" cellpadding="2" cellspacing="1" >
	<tr>
		<td colspan="2" ><font color="#d1ad2e"><b>MASUKKAN DATA KONSUL</b><hr color="#d1ad2e" width="400"></font></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>
			<input name="TxtNama" type="text" maxlength="60" size="35" value="<?php echo $TxtNama; ?>">		</td>
	</tr>
	<tr>
		<td>Kelamin</td>
		<td>
		<input type="radio" name="RbKelamin" value="P" >Pria
		<input type="radio" name="RbKelamin" value="W" >Wanita		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>
			<input name="TxtAlamat" type="text" maxlength="60" size="35" value="<?php echo $TxtAlamat; ?>">		</td>
	</tr>
	<tr>
		<td width="76">Umur</td>
		<td width="312">
			<input name="TxtUmur" type="text" maxlength="60" size="35" value="<?php echo $TxtUmur; ?>">		</td>
	</tr>
	<tr>
		<td width="76">Orang Tua</td>
		<td width="312">
			<input name="TxtOrangTua" type="text" maxlength="60" size="35" value="<?php echo $TxtOrangTua; ?>">		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" name="Submit" value="Daftar">		</td>
	</tr>
	</table>
</form>
</body>
</html>