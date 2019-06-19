<br>
<br>
<!-- pagina -->
<?php 
    session_unset();

    session_destroy();

    echo '<br /><div class="alert alert-success" role="alert">U bent sucsessvol uitgelogd</div>';
    header("Refresh: 2; url=./index.php?content=aanmelden");
    exit();
?>