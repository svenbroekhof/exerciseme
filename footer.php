<footer>
    <div id="footer_boven">
        <div class="container">
            <b>Exercise</b>Me
        </div>
    </div>
    <div class="container">
        <a style="float: right;">© 2019 ExerciseMe</a>
        <?php 
            if ( isset($_SESSION["id"])){
              echo '
                  <a id="footer" href="index.php?content=logout">Log Uit</a>';
            } else{
              echo '
                  <a id="footer" href="index.php?content=aanmelden">Aanmelden</a>';
            }
          ?>
    </div>
</footer>
