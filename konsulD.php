<?php
$key=$_REQUEST['key'];
$id_gejala=$_REQUEST['id_gejala'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-family: "Times New Roman", Times, serif}
.style4 {font-family: "Times New Roman", Times, serif; font-size: 14px; }
.style5 {
	color: #FF0000;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<span class="style5">
<text3D>
  <marquee>
    Jawablah pertanyaan sesuai dengan gejala yang anda alami  
  </marquee>
</text3D>
</span>
<table width="800" border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="417" valign="top">
<table width="109%" border="0" cellpadding="1" cellspacing="1">
<tr>


<form method="post" action="media.php?page=cekkonsultasi">
<input type="hidden" name="id_penyakit" value="<?php echo $id_penyakit; ?>" />
<?php
$strsql="select * from master_gejala order by id asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
echo "<input type='hidden' name='jml' value='$rt'>";
while($row=mysql_fetch_array($hasil))
{
$no++;
if ($no%2<>0) {$warna="#efefef";} else {$warna="#dddddd";}
?>
<tr bgcolor="<?php echo $warna; ?>">
  <td align="center" width="10%"><input type="checkbox" name="id_gejala[]" value="<?php echo $row[id]; ?>" /></td>
  <td height="25" width="90%"><span class="style4">"Apakah Anda Mengalami <?php echo $row[master_gejala]; ?> ?"</span> </td>
</tr>
<tr>
  <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">
    <label></label>
  </span></td>
  <td height="25"><span class="style2">Masukan Nilai Kepastian =
      <label>
      <select name="nilaipasti">
       <option value="0"selected="selected" >Silahkan Dipilih</option>
		<option value="pastitidak" >Pasti Tidak</option>
        <option value="hampir" >Hampir Pasti Tidak</option>
        <option value="kbt" >Kemungkinan Besar Tidak</option>
        <option value="mt" > Mungkin Tidak</option>
        <option value="kk" >Kemungkinan Kecil</option>
		<option value="mungkin" >Mungkin</option>
		<option value="kb" >Kemungkinan Besar</option>
		<option value="hp" >Hampir Pasti</option>
		<option value="pasti" >Pasti</option>
      </select></label>
  </span></td>
</tr>
<?php
}
?>

<tr>
  <td height="25" colspan="2"><input name="submit" type="submit" value=" Penyakit Anda !!! " /></td>
</tr>
</form>
</table>
</td>
<td width="54">&nbsp;</td>
<td width="319" valign="top">
</td>
</tr>
</table>
</body>
</html>