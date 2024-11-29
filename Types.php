<?php

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