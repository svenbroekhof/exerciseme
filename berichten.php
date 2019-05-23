<!-- navbar -->
<style>
    #active_berichten{
        color: white;
    }
</style>

<!-- site -->
<?php
    $userrole = ['admin'];
    // Connecten met de DB en de beveiliging gebruiken
    include("./connect_db.php");
    include("./security.php");


    $sql = "SELECT * FROM `contact`";

    $result = mysqli_query($conn, $sql);
    $records = "";
    // De berichten en email adressen uit de DB halen
    while ($record = mysqli_fetch_assoc($result)){
        $records .= '<tr><th scope="col">' . $record["id"] . "</th>
        <td>".$record["email"]."</td>
        <td>".$record["bericht"]."</td>
        <td>
            <a href='delete.php?id=" . $record["id"] . "'>
                <img src='./img/kruisje.png' alt='verwijderen' id='icon'>
            </a>
        </td>
        </tr>";
    }

     
?>

    <style>
        #icon{
            width: 20px;
        }
    </style>
    <br>
    <br>
<!-- De berichten laten zien -->
    <main class="container">
    <h1>Berichten:</h1><br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scopre="col" style="color: black;">id</th>
                            <th scope="col" style="color: #2b6fc7;">Email</th>
                            <th scope="col" style="color: #2b6fc7;">Bericht</th>
                            <th scope="col" style="color: #2b6fc7;">Verwijderen</th>
                            
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

    </main>
