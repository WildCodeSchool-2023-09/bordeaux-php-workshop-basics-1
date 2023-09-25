<?php

// echo "Hello Bulbi" . PHP_EOL;

// VARIABLES 
$trainerName = "JFM";

// echo $trainerName . PHP_EOL;

$firstPokemon = 'Bulbi';

// echo $firstPokemon . PHP_EOL;

$firstPokemonLevel = 1;

// echo $firstPokemonLevel . PHP_EOL;

$isPokemonAlive = true;

$firstPokemon = 'Salamèche';

// echo $firstPokemon . PHP_EOL;

// $firstPokemonLevel = $firstPokemonLevel + 1;
// $firstPokemonLevel += 1;
$firstPokemonLevel++;

// echo $firstPokemonLevel . PHP_EOL;

$hometown = 'Bordeaux';
// echo $hometown . PHP_EOL;

// STRINGS
// echo "Je m'appelle $trainerName" . PHP_EOL;
$sentence1 = 'Je m\'appelle ' . $trainerName;

$sentence2 = "mon premier Pokemon est " . $firstPokemon . ". Où est la première arène svp ?";

// echo $sentence1 . ' et ' . $sentence2 . PHP_EOL;

// INCLUDE/REQUIRE

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include 'header.php' ?>

    <?php
        $firstArena = 'Argenta';
        require 'arena.php'
     ?>

    <?php include 'footer.php' ?>
</body>
</html>