<?php
  $userrole = ['admin', 'klant'];

  // Het contact maken met de database
  include('./connect_db.php');
  // Hierdoor werken de functies
  include('./functions.php');
  // Hierdoor kunnen gebruikers niet op deze pagina komen zonder in te loggen, dat voorkomt mogelijke errors
  include('./security.php');

  $trainingswaarde = $_POST["hardloopminuten"] * 12;

  $id = $_SESSION['id'];

  $sql = "UPDATE `login`
            SET `calorien` = `calorien` + $trainingswaarde
            WHERE `id` = $id;";

  mysqli_query($conn, $sql);

  echo"<br><br>";

?>

  <h1> <?php echo"Calorien verband: $trainingswaarde"; ?> </h1>

<?php
  header("refresh: 3, url=./index.php?content=fit");
?>
