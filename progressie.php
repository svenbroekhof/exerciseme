<br /><br />
<?php 
$userrole = ['admin','klant'];

include("./connect_db.php");
include("./security.php");
?>
<div class="container">
    <h1>Dagelijkse Progressie:</h1>
</div>
<br />
<?php
    $id = $_SESSION["id"];
    // Dit is de select query voor het opvragen van alle records uit de tabel users
    $sql = "SELECT * FROM progressie";

    // Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt
    $result = mysqli_query($conn, $sql);

    $records = "";
    // De while loop geeft alle gegevens weer uit de tabel user
    while ($record = mysqli_fetch_assoc($result)) {

        $db_id = $record['id'];

        if($id == $db_id){
        $records .=  "<tr>
                        <td> " . $record["training"] . "</td>
                        <td>" . $record["aantalMinuten"] . "</td>
                        <td> " . $record["calorien"] . "</td>
                        <td> " . $record["datum"] . "</td>

                    </tr>"; 
        }
    }

?>


    <main class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
<div class="row">
            <div class="col-12">
            <!-- Op deze plek komt de tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col" style="color: black;">Oefening</th>
                    <th scope="col" style="color: #2b6fc7;">Aantal min</th>
                    <th scope="col" style="color: #2b6fc7;">Calorieën</th>
                    <th scope="col" style="color: #2b6fc7;">Datum</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    echo $records;
                ?>
                </tbody>
                </table>
            </div>
        </div>

    </div>