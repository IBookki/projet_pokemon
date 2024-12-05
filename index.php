<?php include_once('attaque.php'); ?>
<?php include_once('Combat.php'); ?>
<?php include_once('Combattant.php'); ?>
<?php include_once('Pokemon.php'); ?>
<?php include_once('soigner.php'); ?>
<?php include_once('Types.php'); ?>
<?php include_once('Pokeball.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon battle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Choisissez vos Pokémon</h1>
    <div class="pokemon-list">
        <?php foreach ($listePokemons as $pokemon): ?>
            <div class="pokemon-card">
                <img src=<?= $pokemon->image ?> alt="">
                <h2><?= $pokemon->nom ?></h2>
                <p>Type : <?= $pokemon->type ?></p>
                <p>Points de vie : <?= $pokemon->pointsDeVie ?></p>
                <p>Puissance d'attaque : <?= $pokemon->puissanceAttaque ?></p>
                <p>Défense : <?= $pokemon->defense ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <form action="duel.php" method="POST">
        <label for="pokemon1">Premier Pokémon :</label>
        <select name="pokemon1" id="pokemon1" required>
            <?php foreach ($listePokemons as $index => $pokemon): ?>
                <option value="<?= $index ?>"><?= $pokemon->nom ?></option>
            <?php endforeach; ?>
        </select>

        <label for="pokemon2">Deuxième Pokémon :</label>
        <select name="pokemon2" id="pokemon2" required>
            <?php foreach ($listePokemons as $index => $pokemon): ?>
                <option value="<?= $index ?>"><?= $pokemon->nom ?></option>
            <?php endforeach; ?>
        </select>

        <div ><button class="center"type="submit">Lancer le combat</button></div>
    </form>
    
    
</body>
</html>