<?php
    require_once("db.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM webdasar WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
    	<table>
        <form method="post">
        <tr>
            <td>
                Nama
            </td>
            <td>
                <input type="text" name="nama" placeholder="<?php echo $row['nama'] ?>"><br><br>
            </td>
        <tr>
            <td>
                NIM
            </td>
            <td>
                <input type="text" name="nim" placeholder="<?php echo $row['nim'] ?>"><br><br>
            </td>
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
					<input type="text" name="asal" value="<?php echo $row["asal"];?>">
				</td>

			<tr>

				<td>

					Moto Hidup

				</td>

				<td>

				<textarea rows="5" cols="40" name="moto" value="<?php echo $row["moto"];?>">
				</textarea>
			</td>
			<tr>
				<td>
					<input type="submit" name="kirim" value="KIRIM">
				</td>
			</tr>
        </tr>
        </form>
    </table>
    </body>
</html>
<?php
    if (isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin		= $_POST["jenis_kelamin"];
		$program_studi		= $_POST["program_studi"];
		$fakultas	= $_POST["fakultas"];
		$asal		= $_POST["asal"];
		$moto		= $_POST["moto"];
        $sql = "UPDATE webdasar SET nama='$nama',nim='$nim',jenis_kelamin = '$jenis_kelamin', program_studi = '$program_studi', fakultas = '$fakultas', asal = '$asal', moto = '$moto' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: lihatdata.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>