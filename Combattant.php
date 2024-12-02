<?php
require_once("Combat.php");
require_once("Pokemon.php");
require_once("attaque.php");
require_once("soigner.php");
require_once("Types.php");
require_once("Pokeball.php");

class  Combattant {
    private function seBattre(Pokemon $adversaire): void{}
    public function utiliserAttaqueSpeciale(Pokemon $adversaire): void{}
}