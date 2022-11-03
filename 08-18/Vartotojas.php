<?php
class Vartotojas {
  public $vardas;
  public $pavarde;

  public function pasisveikink()
  {
    return "Labas, " .  $this -> vardas;
  }
}
 
?>