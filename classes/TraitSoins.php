<?php
trait TraitSoins {
    public function soigner() {
        $this->pointsDeVie += 20;
        if ($this->pointsDeVie > 100) {
            $this->pointsDeVie = 100; // Cap maximum
        }
    }
}
?>
