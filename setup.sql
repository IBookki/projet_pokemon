CREATE DATABASE IF NOT EXISTS pokemon_battle;

USE pokemon_battle;

CREATE TABLE pokemons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    type VARCHAR(20) NOT NULL,
    pointsDeVie INT NOT NULL,
    puissanceAttaque INT NOT NULL,
    defense INT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO pokemons (nom, type, pointsDeVie, puissanceAttaque, defense, image) VALUES
('Dracaufeu', 'Feu', 250, 20, 11, 'https://www.pokebip.com/pokedex-images/300/6.png?v=ev-blueberry'),
('Tortank', 'Eau', 265, 18, 15, 'https://www.pokebip.com/pokedex-images/300/9.png?v=ev-blueberry'),
('Florizarre', 'Plante', 260, 16, 13, 'https://www.pokebip.com/pokedex-images/300/3.png?v=ev-blueberry');
