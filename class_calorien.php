<?php
include('./class_exercise.php');

class Calorien extends Exercise {
    // Fields
  private $calorien;
  
  public function set_calorien($calorien) {
    if ($calorien < 0 || $calorien > 5000) {
      $this->calorien = NULL;
      echo "Dit aantal calorien is ongeldig ";
    } else {
      $this->calorien = $calorien;
    }
  }

  function __construct($args = []) {
    $this->trainingnaam = $args['trainingnaam'] ?? 'niet bekend';
    $this->zwaarheid = $args['zwaarheid'] ?? 'onbekend';
  }

  public function get_calorien() {
    return "Calorien = " . $this->calorien . "<br>";
  }

  public function get_trainingnaam() {
      return 'Naam: ' . $this->trainingnaam . "<br>";
  }

  public function get_zwaarheid() {
      return 'Zwaarheid: ' . $this->zwaarheid . "<br>";
  }
}

?>