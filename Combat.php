<?php
require_once("attaque.php");
require_once("Pokemon.php");
require_once("Combattant.php");
require_once("soigner.php");
require_once("Types.php");

class Combat {
    private Combattant $pokemon1;
    private Combattant $pokemon2;
    
    public function __construct(Combattant $pokemon1, Combattant $pokemon2) {
        $this -> pokemon1 = $pokemon1;
        $this -> pokemon2 = $pokemon2;
    }

    public function demarrerCombat():void {
        while($this -> pokemon1 -> estKO() === false && $this -> pokemon2 -> estKO() === false){
            $this -> tourDeCombat($this -> pokemon1, $this -> pokemon2);
            if ($this -> pokemon1 -> estKO() === true or $this -> pokemon2 -> estKO() === true) {
                break;
            }

            $this -> demarrerCombat($this -> pokemon2, $this -> pokemon1);
            if ($this -> pokemon1 -> estKO() === true or $this -> pokemon2 -> estKO() === true) {
                break;
            }
        }

        $this -> determinerVainqueur($this -> pokemon1, $this -> pokemon2);
    
      
}

    private function tourDeCombat(Combattant $pokemon1, Combattant $pokemon2): void {
        $attaquant -> attaque($adversaire);

        echo "{$attaquant -> nom} = {$attaquant -> pointsDeVie} PV";
        echo "{$defenseur -> nom} = {$defenseur -> pointsDeVie} PV";

        if ($defenseur -> estKO() === false) {
            $attaquant -> capaciteSpeciale($defenseur); 
        }

}

    private function determinerVainqueur(Combattant $pokemon1, Combattant $pokemon2): void {
        if ($this -> pokemon1 -> estKO() === true) {
            echo "Le vainqueur est {$pokemon2 -> nom}";
        } elseif ($this -> pokemon2 -> estKO() === true) {
            echo "Le vainqueur est {$pokemon1 -> nom}";
        }
    }

}