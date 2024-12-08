
<?php
class Combat {
    public function lancerCombat(Pokemon $pokemon1, Pokemon $pokemon2) {
        $degats1 = $pokemon1->getPuissanceAttaque() - $pokemon2->getDefense();
        $degats2 = $pokemon2->getPuissanceAttaque() - $pokemon1->getDefense();

        if ($degats1 > $degats2) {
            return $pokemon1->getNom() . " remporte le combat !";
        } elseif ($degats2 > $degats1) {
            return $pokemon2->getNom() . " remporte le combat !";
        } else {
            return "Le combat est un match nul !";
        }
    }
}
?>
