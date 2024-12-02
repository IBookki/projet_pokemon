<?php
require_once("Combat.php");
require_once("Pokemon.php");
require_once("Combattant.php");
require_once("soigner.php");
require_once("Types.php");
require_once("Pokeball.php");

class attaque {
    private string $nom;
    private int $puissance;
    private int $precision;

    public function __construct(string $nom, int $puissance, int $precision) {
        $this -> nom = $nom;
        $this -> puissance = $puissance;
        $this -> precision = $precision;
    }

    function executerAttaque(Pokemon $adversaire): void{
        if (rand(0, 100) <= $this -> precision) {
            $adversaire -> recevoirDegats($this -> puissance);
        } else {
            echo "Attaque ratée";
        }
        }
    }