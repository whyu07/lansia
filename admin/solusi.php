
<?php
$nama_gejala=$_REQUEST['nama_gejala'];
$definisi=$_REQUEST['definisi'];
$solusi=$_REQUEST['solusi'];

if ($aksi=="del")
{
mysql_query("delete from master_penyakit where id='$id'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/style_tabel.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a href="media.php?page=solusi&amp;aksi=add">Tambah</a>
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#FFFF66">
<td width="50" height="30" align="center">NO.</td>
<td width="250" align="center">NAMA PENYAKIT</td>
<td width="350" align="center">Definisi</td>
<td width="350" align="center">Solusi</td>
<td colspan="2">&nbsp;</td>
</tr>
<?php
if ($aksi=="add")
{
?>
<tr>
<form method="post" action="insert_penyakit.php">
  <td align="center" height="30">&nbsp;</td>
  <td align="center"><input type="text" name="nama_gejala" value="<?php echo $nama_gejala; ?>" size="50" /></td>
  <td align="center"><input type="text" name="definisi" value="<?php echo $definisi; ?>" size="50" /></td>
  <td align="center"><input type="text" name="solusi" value="<?php echo $solusi; ?>" size="50" /></td>
  <td width="50" align="center"><input type="submit" value=" Simpan " /></td>
  <td width="50" align="center"><input type="button" value=" Batal " onclick="parent.location='media.php?page=solusi'" /></td>
</form>
</tr>
<?php
}
elseif ($aksi=="edit")
{
$strsql="select * from master_penyakit where id='$id'";
$hasil=mysql_query($strsql);
$row=mysql_fetch_array($hasil);
?>
<tr>

<form method="post" action="update_penyakit.php">
<input type="hidden" name="id" value="<?php echo $id; ?>" />

  <td align="center" height="30">&nbsp;</td>
  <td align="center"><input type="text" name="nama_gejala" value="<?php echo $row[master_penyakit]; ?>" size="50" /></td>
   <td align="center"><input type="text" name="definisi" value="<?php echo $row[definisi]; ?>" size="50" /></td>
    <td align="center"><input type="text" name="solusi" value="<?php echo $row[solusi]; ?>" size="50" /></td>
  <td width="50" align="center"><input type="submit" value=" Simpan " /></td>
  <td width="50" align="center"><input type="button" value=" Batal " onclick="parent.location='media.php?page=solusi'" /></td>
</form>

</tr>
<?php
}
$strsql="select * from master_penyakit order by id asc";
$hasil=mysql_query($strsql);
while($row=mysql_fetch_array($hasil))
{
$no++;
if ($no%2<>0) {$warna="#efefef";} else {$warna="#dddddd";}
?>

<tr bgcolor="<?php echo $warna; ?>">
  <td align="center" height="30"><?php echo $no; ?></td>
  <td align="left"><?php echo $row[master_penyakit]; ?></td>
  <td align="left"><?php echo $row[definisi]; ?></td>
   <td align="left"><?php echo $row[solusi]; ?></td>
  <td width="50" align="center" ><a href="media.php?page=solusi&aksi=edit&id=<?php echo $row[id]; ?>">| Edit  </a></td>
  <!-- <td width="50" align="center"><a href="media.php?page=solusi&aksi=del&id=<?php echo $row[id]; ?>" onClick="return confirmdelete('Data ini');">Delete</a></td> -->
</tr>
<?php
}
mysql_free_result($hasil);
?>
</table>
</body>
</html>
</div>
