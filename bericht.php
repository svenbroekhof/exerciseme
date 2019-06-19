<!-- site -->
<?php
    include("./connect_db.php");
    include("./functions.php");
    //contact met de database
    $sql = "SELECT * FROM `contact`";
    $result = mysqli_query($conn, $sql);

    
    $_email = sanitize($_POST["email"]);
    $_bericht = sanitize($_POST["bericht"]);


    $sql = "INSERT INTO `contact` (`id`,
                      `email`,
                      `bericht`
                      )
                      VALUES(NULL,
                      '" . $_POST["email"] . "',
                      '" . $_POST["bericht"] . "')";
    mysqli_query($conn, $sql);

    //mogelijke resultaten

    if ( $result ) {
        //succes
        echo '<br><br><br><div class="alert alert-success" role="alert">
            Uw bericht is succesvol verzonden.
        </div>';
        header("Refresh: 4; url=./index.php?content=contact");
    } else {
        //foutmelding
        echo '<br><br><br><div class="alert alert-danger" role="alert">
        Er is iets fout gegaan tijdens het verzenden van uw bericht. Probeer het opnieuw.
    </div>';
    }
?>