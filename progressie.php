<br /><br /> <br />
<h1>Dagelijkse Progressie</h1>
<br />
<?php
    include("./connect_db.php");

     // Dit is de select query voor het opvragen van alle records uit de tabel users
     $sql = "SELECT * FROM activiteiten";

      // Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt
    $result = mysqli_query($conn, $sql);

    $records = "";
    // De while loop geeft alle gegevens weer uit de tabel user
    while ($record = mysqli_fetch_assoc($result)) {
        $records .=  "<tr>
                        <td> " . $record["naam"] . "</td>
                        <td>" . $record["hoeveelheid"] . "</td>
                        <td> " . $record["kcal"] . "</td>
                        <td> " . $record["datum"] . "</td>

                    </tr>"; 
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
                    <th scope="col">Oefening</th>
                    <th scope="col">Aantal min</th>
                    <th scope="col">Calorieën</th>
                    <th scope="col">Datum</th>
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