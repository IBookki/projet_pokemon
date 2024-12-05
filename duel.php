<?php
require_once 'Combat.php';
require_once 'Types.php';
require_once 'Pokeball.php';

$pokemon1 = $listePokemons[$_POST['pokemon1']];
$pokemon2 = $listePokemons[$_POST['pokemon2']];

$combat = new Combat($pokemon1, $pokemon2);
$resultats = $combat->demarrerCombat();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du Combat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Résultat du Combat</h1>
    <div class="flex">
        <div>
            <img src="<?= $pokemon1 -> image?>" alt="">
        </div>

        <div class="combat-result">
            <?php foreach ($resultats as $resultat): ?>
                <p><?= $resultat ?></p>
            <?php endforeach; ?>
        </div>

        <div>
            <img src="<?= $pokemon2 -> image?>" alt="">
        </div>
    </div>

    <a href="index.php">Retour à la sélection</a>
</body>
</html>
