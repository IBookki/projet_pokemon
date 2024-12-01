<?php
require_once("Combat.php");
require_once("Pokemon.php");
require_once("Combattant.php");
require_once("attaque.php");
require_once("Types.php");

trait soigner{

public function soigner(): void {
    $this -> pointsDeVie = 100;
    echo "Le pokemon a été soigné";
}
}