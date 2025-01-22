<?php

// process qui va attribuer les dés au héro et au monstre joués

require_once '../utils/autoloader.php';
session_start();

$dicesManager = new DicesManager();

$resultsHero  = $dicesManager->resultDices(2, 1, 20); 
$resultsMonster = $dicesManager->resultDices(1, 2, 100); 

$damagesByHero = array_sum($resultsHero);
$damagesByMonster = array_sum($resultsMonster);


header('Content-Type: application/json');


$resultat = [
    'hero' => [
        'results' => $resultsHero,
        'damages' => $damagesByHero
    ],
    'monster' => [
        'results' => $resultsMonster,
        'damages' => $damagesByMonster
    ]
];

echo json_encode($resultat);