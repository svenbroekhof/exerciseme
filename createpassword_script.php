<!-- navbar -->
<style>
    #active_login{
        color: white;
    }
</style>

<!-- site -->
<?php
  include("./connect_db.php");
  
  include("./functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id = sanitize($_POST["id"]);

  if (!empty($password) && !empty($checkpassword)){
    $blowfish_password = password_hash($password, CRYPT_BLOWFISH);



  $sql = "UPDATE `login`
        SET     `password` = '$blowfish_password'
        WHERE   `id` = $id";

  $result = mysqli_query($conn, $sql);

  if ( $result ) {

    if (!strcmp($password, $checkpassword)){
      echo '<div class="alert alert-success" role="alert">U wachtwoord is succesvol veranderd. U wordt doorgestuurd naar de inlogpagina</div>';
     header("Refresh: 2; url=./index.php?content=eerste_login");
    } else{
      echo '<div class="alert alert-danger" role="alert">Uw ingevoerde wachtwoorden zijn niet hetzelfde, probeer het nogmaals</div>';
      header("Refresh: 4; url=./index.php?content=createpassword&id=$id");
    }

    

  } else{
    echo '<div class="alert alert-danger" role="alert">Er is geen wachtwoord ingevoerd, voer een wachtwoord in</div>';
    header("Refresh: 4; url=./index.php?content=createpassword&id=$id");

  }
}
?>