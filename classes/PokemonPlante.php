<?php
require_once 'Pokemon.php';

class PokemonPlante extends Pokemon {
    public function __construct($nom, $pointsDeVie, $puissanceAttaque, $defense, $image) {
        parent::__construct($nom, 'Plante', $pointsDeVie, $puissanceAttaque, $defense, $image);
    }
}
?>
