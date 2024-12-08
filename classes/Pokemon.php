<?php
abstract class Pokemon {
    protected $nom;
    protected $type;
    protected $pointsDeVie;
    protected $puissanceAttaque;
    protected $defense;
    protected $image;

    public function __construct($nom, $type, $pointsDeVie, $puissanceAttaque, $defense, $image) {
        $this->nom = $nom;
        $this->type = $type;
        $this->pointsDeVie = $pointsDeVie;
        $this->puissanceAttaque = $puissanceAttaque;
        $this->defense = $defense;
        $this->image = $image;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getType() {
        return $this->type;
    }

    public function getPointsDeVie() {
        return $this->pointsDeVie;
    }

    public function getPuissanceAttaque() {
        return $this->puissanceAttaque;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function getImage() {
        return $this->image;
    }
}
?>
