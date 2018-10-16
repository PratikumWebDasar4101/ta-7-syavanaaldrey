<?php

require_once("db.php");

$nama	 	= $_POST["nama"];

$nim 		= $_POST["nim"];

$jenkel		= $_POST["jenis_kelamin"];

$prodi		= $_POST["program_studi"]; 

$fakultas	= $_POST["fakultas"];

$asal		= $_POST["asal"];

$moto		= $_POST["moto"];

$sql = "INSERT INTO webdasar VALUES('','$nama','$nim','$jenkel','$prodi','$fakultas','$asal','$moto')";

if (mysqlI_query($conn, $sql)) {

    echo "New record created successfully<br>";

}else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

echo "Silahkan lihat data di <a href='lihatdata.php'>link ini</a>";

?> 