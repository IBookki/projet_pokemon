<?php

abstract class Pokemon {
    public string $nom;
    public string $type;
    public int $pointsDeVie;
    public int $puissanceAttaque;
    public int $defense;
    public string $image;

    public function __construct(string $nom, string $type, int $pointsDeVie, int $puissanceAttaque, int $defense, string $image) {
        $this->nom = $nom;
        $this->type = $type;
        $this->pointsDeVie = $pointsDeVie;
        $this->puissanceAttaque = $puissanceAttaque;
        $this->defense = $defense;
        $this->image = $image;
    }

    public function attaquer(Pokemon $adversaire): string {
        $degats = max(0, $this->puissanceAttaque - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        return "{$adversaire->nom} subit {$degats} dégâts ({$adversaire->pointsDeVie} PV restants).";
    }

    public function recevoirDegats(int $degats): void {
        $this->pointsDeVie = max(0, $this->pointsDeVie - $degats);
    }

    public function estKO(): bool {
        return $this->pointsDeVie <= 0;
    }

    abstract public function capaciteSpeciale(Pokemon $adversaire): string;
}




