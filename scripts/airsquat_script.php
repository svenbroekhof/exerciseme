<?php
    $userrole = ['admin','klant'];

    include("./connect_db.php");
    include("./functions.php");
    include("./security.php");
    //contact met de database

    $trainingswaarde = $_POST["airsquatminuut"] * 6;

    $level = 1;

    $id = $_SESSION['id'];

    $sql = "UPDATE `login`
                SET `calorien` = `calorien` + $trainingswaarde
                
                WHERE `id` = $id;
                
                SET `niveau` = `niveau` + $level
                WHERE `id` = $id;
                ";

    mysqli_query($conn, $sql);

    echo"<br> <br>";
?>

    <h1> <?php echo "Calorien verbrand: $trainingswaarde"; ?> </h1>

<?php
    header("refresh: 3; url=./index.php?content=fit");
?>
