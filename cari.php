<?php
	require_once("db.php");
	$value	= $_GET["cari"];

	$sql 	= "SELECT * FROM webdasar WHERE nim LIKE '%$value%'";
	$result	= mysqli_query($conn, $sql)
?>
<html>
<body>

<table border="1">
		<tr>



			<th>Nama</th>

			<th>NIM</th>

			<th>Aksi</th>



		</tr>
		<?php

            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);

            if (mysqli_num_rows($result) > 0) {

			while ($row = mysqli_fetch_assoc($result)) {

				?>
				<tr>

				<td><?php echo $row['nama']?></td>

				<td><?php echo $row['nim']?></td>

				<td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a>



				</tr>
			<?php

			}

		}else {

			echo "0 Result";

		}

		mysqli_close($conn);

        ?>
</table>
<a href="lihatdata.php">KEMBALI KE LIHAT DATA</a>
</body>
</html>