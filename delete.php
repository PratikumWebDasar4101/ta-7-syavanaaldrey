<?php

    require_once("db.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM webdasar WHERE id=$id";

    if (mysqli_query($conn, $sql)) {

        header("location: lihatdata.php");

    }else {

        echo "Error: " . $sql . "<br?" . mysqli_error($conn);

    }

    mysqli_close($conn);

?>