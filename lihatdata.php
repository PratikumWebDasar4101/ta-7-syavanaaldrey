<?php

require_once("db.php");

?>



<html>



<body>

<table border="1">

	<td colspan="3">
		<form action="cari.php" method="get">
			<input type="text" name="cari" placeholder="Cari NIM Mahasiswa">
			<input type="submit" value="Cari">
		</form>
	</td>
		<tr>



			<th>Nama</th>

			<th>NIM</th>

			<th>Aksi</th>



		</tr>



		<?php

            $sql = "SELECT * FROM webdasar";

            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);

            if (mysqli_num_rows($result) > 0) {

			while ($row = mysqli_fetch_assoc($result)) {

				?>



				<tr>

				<td><?php echo $row['nama']?></td>

				<td><?php echo $row['nim']?></td>

				<td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="detail.php?id=<?php echo $row['id']?>">Detail</a>



				</tr>



				<?php

			}

		}else {

			echo "0 Result";

		}

		mysqli_close($conn);

        ?>





</table>



</body>



</html>



<h3><a href="input.php">ISI INPUT DATA MAHASISWA</a></h3>