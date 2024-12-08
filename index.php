<?php
require_once('config.php');

$query = $pdo->query('SELECT * FROM pokemons');
$listePokemons = $query->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Battle</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<h1>Choisissez vos Pokémon</h1>
<div class="pokemon-list">
    <?php foreach ($listePokemons as $pokemon): ?>
        <div class="pokemon-card">
            <img src="<?= htmlspecialchars($pokemon->image) ?>" alt="<?= htmlspecialchars($pokemon->nom) ?>">
            <h2><?= htmlspecialchars($pokemon->nom) ?></h2>
            <p>Type : <?= htmlspecialchars($pokemon->type) ?></p>
            <p>Points de vie : <?= htmlspecialchars($pokemon->pointsDeVie) ?></p>
            <p>Puissance d'attaque : <?= htmlspecialchars($pokemon->puissanceAttaque) ?></p>
            <p>Défense : <?= htmlspecialchars($pokemon->defense) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<form action="duel.php" method="POST">
    <label for="pokemon1">Premier Pokémon :</label>
    <select name="pokemon1" id="pokemon1" required>
        <?php foreach ($listePokemons as $pokemon): ?>
            <option value="<?= $pokemon->id ?>"><?= htmlspecialchars($pokemon->nom) ?></option>
        <?php endforeach; ?>
    </select>

    <label for="pokemon2">Deuxième Pokémon :</label>
    <select name="pokemon2" id="pokemon2" required>
        <?php foreach ($listePokemons as $pokemon): ?>
            <option value="<?= $pokemon->id ?>"><?= htmlspecialchars($pokemon->nom) ?></option>
        <?php endforeach; ?>
    </select>

    <div><button type="submit">Lancer le combat</button></div>
</form>

</body>
</html>
