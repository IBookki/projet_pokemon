<?php 

abstract class Pokemon {
    public string $nom;
    public string $type;
    public int $pointsDeVie;
    public int $puissanceAttaque;
    public int $defense;

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



