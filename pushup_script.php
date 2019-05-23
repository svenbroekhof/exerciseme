<!-- site -->
<?php
    include("./connect_db.php");
    include("./functions.php");
    //contact met de database

    $id = $_SESSION['id'];

    $sql = "UPDATE `login` 
                SET `calorien` = `calorien` + 100
                WHERE `id` = $id;";

header("./index.php?content=home");

    mysqli_query($conn, $sql);

?>