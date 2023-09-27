<?php

// BOUCLES FOR
for ($i = 0; $i <= 9; $i++) {
    echo $i . '<br>';
}

for ($i = 10; $i >= 0; $i--) {
    echo $i . '<br>';
}

for ($i = 10; $i >= -10; $i -= 3) {
    echo $i . '<br>';
}

// CONDITIONS 
if ($firstPokemon === 'Bulbi') {
    echo "Bon choix";
} elseif ($firstPokemon === 'Salamèche') {
    echo "Tu n’as aucune personnalité";
} else {
    echo "Ah c’est donc " . $firstPokemon . " ?";
}

// TABLEAUX INDEXÉS
$pokemons = [
    'Bulbizarre', 
    'Salamèche', 
    'Carapuce', 
    'Pikachu'
];


$pokemons[] = 'Mewto';
// var_dump($pokemons);
?>

<ul>
    <?php foreach ($pokemons as $pokemon): ?>
        <li> <?=$pokemon?> </li>
    <?php endforeach; ?>
</ul>

<?php
// TABLEAUX ASSOCIATIFS
$pokemons = [
    'Bulbizarre' => 15, 
    'Salamèche' => 7, 
    'Carapuce' => 3, 
    'Pikachu' => 45,
    "Mewto" => 100
];
$pokemons['Bulbizarre']++;
// var_dump($pokemons);

unset($pokemons['Bulbizarre']);
$pokemons['Herbizarre'] = 16;
asort($pokemons);
// var_dump($pokemons);
?>

<ul>
    <?php foreach ($pokemons as $pokemon => $level): ?>
        <?php if ($level > 10 && $level < 45): ?>
            <li> <?=$pokemon?> : <?=$level?> </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<?php
// TABLEAUX multidimensionnels
$pokemons = [
    'Plante' => ['Bulbizarre', 'Mystherbe', 'Chetiflor'],
    'Eau' => ['Carapuce', 'Stari', 'Magicarpe'],
    'Feu' => ['Salamèche'],
    'Sol' => ['Sabelette', 'Taupiqueur']
];

$pokemons['Feu'][] = 'Caninos';
$pokemons['Electrik'] = ['Pikachu', 'Magneti', 'Voltorbe'];
var_dump($pokemons);

?>

<h2>Type Plante</h2>
<ul>
    <?php foreach ($pokemons['Plante'] as $pokemon): ?>
        <li> <?=$pokemon?> </li>
    <?php endforeach; ?>
</ul>

<h2>Number of type Eau : <?=count($pokemons['Eau'])?></h2>
