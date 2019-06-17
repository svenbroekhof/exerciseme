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
  <?php include("./trainingen.php"); ?>
  <div class="row">
    <div class="col">
        <?php
            // echo "$result";
        ?>
    </div>
  </div>
</div>
<div class="container">
  <br>
  <div class="row">
    <div class="col-sm">
        <div class="card text-center">
            <div id="zwaar" class="card-header">
                zwaar
            </div>
            <div class="card-body">
                <h5 class="card-title">Hardloopen</h5>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapsExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Doe de training!
                </a>
                <div class="collapse" id="collapsExample">
                    <br>
                    Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                    Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                    Strek je benen zodat je op je tenen komt te staan.
                    Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                    Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                    Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                    Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                    Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />

                    <form action="./index.php?content=scripts/hardlopen_script" method="post">
                        <div class="form-group">
                        <label for="aantal">Aantal minuten hardgelopen</label>
                        <input type="number" class="form-control" id="InputAantal" aria-describedby="AantalHelp"
                         placeholder="Voer uw aantal minuten hardgelopen in..." name="hardloopminuten">
                        <input type="submit" class="btn btn-primary" value="Voltooid!">

                    </form>
                </div>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
        <div class="col-sm">
            <div class="card text-center">
                <div id="gemmideld" class="card-header">
                    gemmideld
                </div>
                <div class="card-body">
                    <h5 class="card-title">Fietsen</h5>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Doe de training!
                </a>
                <div class="collapse" id="collapseExample">
                    <br>
                    Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                    Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                    Strek je benen zodat je op je tenen komt te staan.
                    Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                    Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                    Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                    Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                    Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        voltooid
                    </a>
                </div>

                </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card text-center">
            <div id="licht" class="card-header">
                licht
            </div>
            <div >
                <img id="img_card" src="./img/pushup.jpg" alt="push up" />
                <h5 class="card-title">Push Up</h5><br>
                <div class="card text-center">
                    <a class="btn btn-primary" data-toggle="collapse" href="#pushup" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Doe de training!
                    </a>
                    <div class="collapse" id="pushup">
                        <br>
                        Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                        Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                        Strek je benen zodat je op je tenen komt te staan.
                        Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                        Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                        Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                        Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                        Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />
                        <form action="./index.php?content=scripts/pushup_script" method="post">
                            <div class="form-group">
                            <label for="aantal">Aantal pushups</label>
                            <input type="number" class="form-control" id="InputAantal" aria-describedby="AantalHelp"
                             placeholder="Voer uw aantal pushups in..." name="aantalpushups">
                            <input type="submit" class="btn btn-primary" value="Voltooid!">

                        </form>

                </div>
                </div>

            </div>
        </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm">
        <div class="card text-center">
            <div id="zwaar" class="card-header">
                Level 10
            </div>
            <div class="card-body">
                <h5 class="card-title">Buikspieren</h5>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapsExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Doe de training!
                </a>

                <div class="collapse" id="collapsExample">
                    <br>
                    Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                    Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                    Strek je benen zodat je op je tenen komt te staan.
                    Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                    Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                    Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                    Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                    Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />

                    <form action="./index.php?content=scripts/situp_script" method="post">
                        <div class="form-group">
                        <label for="aantal">Aantal minuten situps gedaan</label>
                        <input type="number" class="form-control" id="InputAantal" aria-describedby="AantalHelp" placeholder="Voer uw aantal minuten in..." name="aantalsitups">
                        <input type="submit" class="btn btn-primary" value="Voltooid!">
                    </form>
                </div>

            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
        <div class="col-sm">
            <div class="card text-center">
                <div id="gemmideld" class="card-header">
                    gemmideld
                </div>
                <div class="card-body">
                    <h5 class="card-title">Optrekken</h5>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Doe de training!
                </a>
                <div class="collapse" id="collapseExample">
                    <br>
                    Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                    Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                    Strek je benen zodat je op je tenen komt te staan.
                    Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                    Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                    Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                    Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                    Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        voltooid
                    </a>
                </div>

                </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card text-center">
            <div id="licht" class="card-header">
                licht
            </div>
            <div class="card-body">
                <h5 class="card-title">Push Up</h5><br>
                <img id="img_card" src="./img/pushup.jpg" alt="push up" />
                <a class="btn btn-primary" data-toggle="collapse" href="#pushup2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Doe de training!
                </a>
                <div class="collapse" id="pushup2">
                    <br>
                    Ga als eerst op je knieën zitten en plaats je handen op de vloer.
                    Plaats je handen op schouderbreedte en houd een lichte binnenwaartse buiging in je ellebogen.
                    Strek je benen zodat je op je tenen komt te staan.
                    Strek vervolgens je armen omhoog waardoor je jezelf van de grond af duwt.
                    Zorg ervoor dat je dit op een explosieve manier doet, waarbij je maximale kracht uit je borstspieren en triceps haalt.
                    Laat je hierna langzaam en gecontroleerd zakken terwijl je de rest van je lichaam recht houdt.
                    Zak tot je nog iets boven de grond ‘zweeft’ en houd deze positieve even vast zodat je de spanning op je borstspieren voelt.
                    Druk jezelf vervolgens weer op dezelfde wijze omhoog en herhaal dit voor het gewenste aantal reps.<br /><br />
                    <a class="btn btn-primary" href="index.php?content=scripts/pushup_script" role="button" aria-expanded="false" aria-controls="collapseExample">
                        voltooid
                    </a>
                </div>

            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
  </div>
</div>
<br>
