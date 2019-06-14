<?php
    $userrole = ['admin','klant'];
    
    include("./connect_db.php");
    include("./functions.php");
    //contact met de database

    $trainingswaarde = $_POST["aantalpushups"] * 2;
    
    $id = $_SESSION['id'];

    $sql = "UPDATE `login` 
                SET `calorien` = `calorien` + $trainingswaarde
                WHERE `id` = $id;";

    mysqli_query($conn, $sql);

    header("refresh: 1; url=./index.php?content=fit")

?>
<br>
<br>
<h1>Laden...</h1>