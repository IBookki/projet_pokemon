<?php
require_once("Combat.php");
require_once("Pokemon.php");
require_once("Combattant.php");
require_once("soigner.php");
require_once("Types.php");
require_once("Pokeball.php");

class Combat {
    private $pokemon1;
    private $pokemon2;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function demarrerCombat(): array {
        $log = [];
        while (!$this->pokemon1->estKO() && !$this->pokemon2->estKO()) {
            $log[] = $this->tourDeCombat($this->pokemon1, $this->pokemon2);

            if ($this->pokemon2->estKO()) {
                break;
            }

            $log[] = $this->tourDeCombat($this->pokemon2, $this->pokemon1);
        }

        $log[] = $this->determinerVainqueur();
        return $log;
    }

    private function tourDeCombat(Pokemon $attaquant, Pokemon $defenseur): string {
        $log = "";
    
        if (!$defenseur->estKO()) {
            $log = $attaquant->capaciteSpeciale($defenseur);
        } else {
            $log = $attaquant->attaquer($defenseur);
        }
    
        return $log;
    }
    

    private function determinerVainqueur(): string {
        if ($this->pokemon1->estKO()) {
            return "Le vainqueur est {$this->pokemon2->nom}!";
        }
        return "Le vainqueur est {$this->pokemon1->nom}!";
    }
}
