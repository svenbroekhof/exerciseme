<!-- navbar -->
<style>
    #active_login{
        color: white;
    }
</style>

<!-- website -->
<?php 
    include("./connect_db.php");
    include("./functions.php");
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $sql = "SELECT * FROM  `login` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
        //inloggen
        $record = mysqli_fetch_assoc($result);
        $blowfish_password = $record["password"];
        if ( password_verify($password, $blowfish_password)) {
            $_SESSION["id"] = $record["id"];
            $_SESSION["email"] = $email;
            $_SESSION["userrole"] = $record["userrole"];
            
            switch ($record["userrole"]){
                case 'klant':
                    echo '<br><br><div class="alert alert-success" role="alert">U bent ingelogd en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=fit");
                break;
                case 'admin':
                    echo '<br><br><div class="alert alert-success" role="alert">U bent ingelogd als administrator en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=home");
                break;
            }
          } else {
            // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
            echo '<br><br><div class="alert alert-danger" role="alert">Uw wachtwoord is niet correct, probeer het nogmaals</div>';
            header("Refresh: 2; url=./index.php?content=aanmelden");
          }
    } else{
        echo '<br><br><div class="alert alert-danger" role="alert">Het ingevoerde e-mailaderes is niet bekent probeer opnieuw</div>';
        header("Refresh: 4; url=./index.php?content=aanmelden");
    }
?> 