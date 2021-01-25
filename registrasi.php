<form method='post' action='daftaraksi.php'>
<table width='400' class='form'>
<h3><img src='images/registrasi.png' width='30' height='30'> Daftar Konsultasi</h3><hr>
<tr><td>Nama		</td><td><input type='text' size='28' name='Nama' value="<?php echo $Nama; ?>"></td></tr>
<tr>
          <td height="30" align="right" >Jenis Kelamin  </td>
          <td height="30" ><input type="radio" name="jk" id="radio" value="L">
            <label for="jk">Laki-Laki
              <input type="radio" name="jk" id="radio2" value="P">
            Perempuan</label></td>
        </tr>
<tr><td>Alamat	</td><td><input type='text' size='28' name='Alamat'  value="<?php echo $Alamat; ?>"></td></tr>
<tr><td>Umur	</td><td><input type='text' size='28' name='Umur'  value="<?php echo $Umur; ?>"></td></tr>
<tr><td>Orang Tua	</td><td><input type='text' size='28' name='OrangTua'  value="<?php echo $OrangTua; ?>"></td></tr>


<tr><td></td><td>&nbsp;<br><button><center><img src="images/registrasi.png" width='15' height='15' >&nbsp;Daftar</button>&nbsp; 
<button type='reset' onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><center><img src="images/close.png" width='14' height='14' >&nbsp; Keluar</button>
</td></tr>
</tr>
</table>
