<?php
require_once 'Pokemon.php';

class PokemonFeu extends Pokemon {
    public function __construct($nom, $pointsDeVie, $puissanceAttaque, $defense, $image) {
        parent::__construct($nom, 'Feu', $pointsDeVie, $puissanceAttaque, $defense, $image);
    }
}
?>
