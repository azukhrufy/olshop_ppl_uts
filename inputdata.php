
<br>

	<br>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" id="form-input" style="text-align: left;" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namabarang"></td>					
			</tr>	
			<tr>
				<td>Masukkan Deskripsi Barang</td>
				<td><textarea name="deskripsi" form="form-input"></textarea></td>
				<td><p><br>note : untuk melakukan enter, gunakan space 2x (contoh : barang baru:(space)(space)kualitas terjamin).</p></td>				
			</tr>	
			<tr>
				<td>Harga Barang</td>
				<td><input type="number" name="harga"></td>					
			</tr>
			<tr>
				<td><input type="hidden" name="penjual" value=<?php echo "$penjual" ?>></td>			
			</tr>
			<tr>
				<td>
					Pilih Foto
				</td>
				<td>
                    <input type="file" name="foto">                                      
                </td>
                
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>				
		</table>
	</form>
