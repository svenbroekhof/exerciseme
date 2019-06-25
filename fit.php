<?php
    //toegang geven alleen als je bent ingelocht
    $userrole = ['admin','klant'];
    // Connecten met de DB en de beveiliging gebruiken

    include("./connect_db.php");
    include("./security.php");
    //informatie oproepen uit de database en de sesion id opvragen
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM `login`";
    $result = mysqli_query($conn, $sql);

 ?>
<br>
<br>
<br>
<br>
<div id="calorien">
    <?php
    //gegevens uit de database leesbaar maaken
    while ($row = mysqli_fetch_assoc($result)) {
        //alle id's uit de database
        $db_id = $row['id'];
        //de calorien opvragen die bij de session id horen
        if($id == $db_id){
            echo $row['calorien'];
        }
    }
    ?>
    <a id="klein">calorien verbrand</a>
</div>
<br>
<br>
<div class="container">
  <br>

<?php 
$db_id = $row['id'];

if ($id == $db_id) {
    if($row['calorien'] >= 100) {
        echo 'We raden je nu aan om een training van het niveau "Gevorderd" te doen';
    } else {
        echo "Er is een fout opgetreden";
    }
}

?>
  <?php include("./trainingen.php"); ?>
