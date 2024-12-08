<?php
require_once 'Pokemon.php';

class PokemonEau extends Pokemon {
    public function __construct($nom, $pointsDeVie, $puissanceAttaque, $defense, $image) {
        parent::__construct($nom, 'Eau', $pointsDeVie, $puissanceAttaque, $defense, $image);
    }
}
?>
