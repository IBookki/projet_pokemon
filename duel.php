<?php
require_once('config.php');

$pokemon1Id = $_POST['pokemon1'];
$pokemon2Id = $_POST['pokemon2'];

$query = $pdo->prepare('SELECT * FROM pokemons WHERE id = :id');
$query->execute(['id' => $pokemon1Id]);
$pokemon1 = $query->fetch(PDO::FETCH_OBJ);

$query->execute(['id' => $pokemon2Id]);
$pokemon2 = $query->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du combat</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Résultat du combat</h1>
    <div class="combat-result">
        <p>Combat entre <strong><?= htmlspecialchars($pokemon1->nom) ?></strong> et <strong><?= htmlspecialchars($pokemon2->nom) ?></strong> :</p>
        <p>
            <?php
            $damage1 = $pokemon1->puissanceAttaque - $pokemon2->defense;
            $damage2 = $pokemon2->puissanceAttaque - $pokemon1->defense;

            if ($damage1 > $damage2) {
                echo htmlspecialchars($pokemon1->nom) . " remporte le combat !";
            } elseif ($damage2 > $damage1) {
                echo htmlspecialchars($pokemon2->nom) . " remporte le combat !";
            } else {
                echo "Le combat est un match nul !";
            }
            ?>
        </p>
    </div>

    <a href="index.php">Retour à la sélection</a>
</body>
</html>
