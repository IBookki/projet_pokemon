<?php 

abstract class Pokemon {
    protected string $nom;
    protected string $type;
    protected int $pointsDeVie;
    protected int $puissanceAttaque;
    protected int $defense;

    public function __construct(string $nom, string $type, int $pointsDeVie, int $puissanceAttaque, int $defense) {
        $this -> nom = $nom;
        $this -> type = $type;
        $this -> pointsDeVie = $pointsDeVie;
        $this -> puissanceAttaque = $puissanceAttaque;
        $this -> defense = $defense;
    }

    public function attaquer(Pokemon $adversaire): void {
        $degats = $this -> puissanceAttaque - $adversaire -> defense;
        $adversaire ->recevoirDegats($degats);
        echo "{$adversaire -> nom} subit {$degats} dégâts ($adversaire -> pointsDeVie)";
    }

    public function recevoirDegats($degats): void {
        $this->pointsDeVie = $this -> pointsDeVie - $degats;
    }

    public function estKO():bool {
        return $this -> pointsDeVie <= 0;
    }

    abstract public function capaciteSpeciale(Pokemon $adversaire): void;

}

class PokemonFeu extends Pokemon {
        public function capaciteSpeciale(Pokemon $adversaire): void {
            if ($adversaire -> type === "Plante"){
                $bonus = 10;
            }
            else {
                $bonus = 0;
            }
            

        $degats = $this -> $puissanceAttaque + $bonus - $adversaire -> defense;
        $adversaire -> recevoirDegats($degats);
        echo "{$adversaire -> nom} subit {$degats} dégâts ($adversaire -> pointsDeVie PV)";
        }

    }

class PokemonEau extends Pokemon {

    public function capaciteSpeciale(Pokemon $adversaire): void {
        if ($adversaire -> type === "Feu"){
            $bonus = 10;
        }
        else {
            $bonus = 0;            
        }        

    $degats = $this -> $puissanceAttaque + $bonus - $adversaire -> defense;
    $adversaire -> recevoirDegats($degats);
    echo "{$adversaire -> nom} subit {$degats} dégâts ($adversaire -> pointsDeVie PV)";
    }

} 

class PokemonPlante extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): void {
            if ($adversaire -> type === "Eau"){
                $bonus = 10;
            }
            else {
                $bonus = 0;
            }
            

    $degats = $this -> $puissanceAttaque + $bonus - $adversaire -> defense;
    $adversaire -> recevoirDegats($degats);
    echo "{$adversaire -> nom} subit {$degats} dégâts ($adversaire -> pointsDeVie PV)";
    }

} 

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

class  Combattant {
    private function seBattre(Pokemon $adversaire): void{}
    public function utiliserAttaqueSpeciale(Pokemon $adversaire): void{}
}

trait soigner{

    public function soigner(): void {
        $this -> pointsDeVie = 100;
        echo "Le pokemon a été soigné";
    }
}
