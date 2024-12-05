<?php
require_once("Combat.php");
require_once("Pokemon.php");
require_once("Combattant.php");
require_once("soigner.php");
require_once("Types.php");
require_once("Pokeball.php");

class PokemonFeu extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): string {
        $bonus = ($adversaire->type === "Plante") ? 10 : 0;
        $degats = max(0, $this->puissanceAttaque + $bonus - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        return "{$adversaire->nom} subit {$degats} dégâts ({$adversaire->pointsDeVie} PV restants) avec la capacité spéciale.";
    }
}

class PokemonEau extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): string {
        $bonus = ($adversaire->type === "Feu") ? 10 : 0;
        $degats = max(0, $this->puissanceAttaque + $bonus - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        return "{$adversaire->nom} subit {$degats} dégâts ({$adversaire->pointsDeVie} PV restants) avec la capacité spéciale.";
    }
}

class PokemonPlante extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): string {
        $bonus = ($adversaire->type === "Eau") ? 10 : 0;
        $degats = max(0, $this->puissanceAttaque + $bonus - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        return "{$adversaire->nom} subit {$degats} dégâts ({$adversaire->pointsDeVie} PV restants) avec la capacité spéciale.";
    }
}
