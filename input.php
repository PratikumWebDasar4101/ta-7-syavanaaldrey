<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
<form action="prosesinput.php" method="POST">
		<table align="center">
			<tr>
				<td colspan="2">
					<center>
						<b>SILAHKAN INPUT DATA DISINI</b>
					</center>
				</td>
			<tr>
				<td>
					NAMA
				</td>
				<td>
					<input type="text" name="nama">
				</td> 
			<tr>
				<td>
					NIM
				</td>
				<td>
					<input type="text" name="nim">
			<tr>
				<td>
					Jenis Kelamin
				</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
					<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
				</td>
			<tr>
				<td>
					Prgoram Studi
				</td>
				<td>
					<select name='program_studi'>
						<option value='mi'>MI</option>
						<option value='tt'>TT</option>
						<option value='if'>IF</option>
						<option value='ka'>KA</option>
						<option value='tk'>TK</option>
					</select>
				</td>
			<tr>
				<td>
					Fakultas
				</td>
				<td>
					<select name='fakultas'>
						<option value='fit'>FIT</option>
						<option value='fif'>FIF</option>
						<option value='fkb'>FKB</option>
						<option value='feb'>FEB</option>
						<option value='fik'>FIK</option>
					</select>
				</td>
			<tr>
				<td>
					Asal
				</td>
				<td>
					<input type="text" name="asal">
				</td>

			<tr>

				<td>

					Moto Hidup

				</td>

				<td>

				<textarea rows="5" cols="40" name="moto">
				</textarea>
			</td>
			<tr>
				<td>
					<input type="submit" name="kirim" value="KIRIM">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>