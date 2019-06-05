<?php
    include("./connect_db.php");
    include("./functions.php");
    //contact met de database

    $id = $_SESSION['id'];

    $sql = "UPDATE `login` 
                SET `calorien` = `calorien` + 100
                WHERE `id` = $id;";

    mysqli_query($conn, $sql);

    header("refresh: 1; url=./index.php?content=fit")

?>
<br>
<br>
<h1>Laden...</h1>