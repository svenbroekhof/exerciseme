<style>
  #wit{
    color: white;
    position: relative;
    right: 0px;
  }
</style>

<nav id="navigatiebalk" class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php?content=home">Exercise me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php 
            if ( isset($_SESSION["id"])){

              echo '
                <li class="nav-item">
                  <a id="active_overzicht" class="nav-link" href="index.php?content=fit">Overzicht</a>
                </li>';
            } else{
              echo '
                <li class="nav-item">
                  <a id="active_login" class="nav-link" href="index.php?content=home">Home</a>
                </li>';
            }
          ?>
      <li class="nav-item">
        <a id="active_contact" class="nav-link" href="index.php?content=contact">Contact</a>
      </li>
      <?php 
            if ( isset($_SESSION["id"])){

              switch ($_SESSION["userrole"]) {
                case 'admin':
                  echo '<li class="nav-item">
                    <a id="active_berichten" class="nav-link" href="index.php?content=berichten">Berichten</a>
                  </li>';
                break;
            }
              echo '                
                <li class="nav-item">
                  <a id="active_logout" class="nav-link" href="index.php?content=logout">Log Uit</a>
                </li>';
            } else{
              echo '
                <li class="nav-item">
                  <a id="active_login" class="nav-link" href="index.php?content=aanmelden">Aanmelden</a>
                </li>';
            }
          ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <span id="wit" class="nav-link" style="float: right; position: relative; display: block;"><?php if (isset($_SESSION['email'])) {echo "welkom " . $_SESSION ["email"];}?></span>
    </form>
  </div>
</nav>
