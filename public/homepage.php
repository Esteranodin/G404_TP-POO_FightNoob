<!-- 
 
-> faire une homepage dédiée pour choix :
    1. prendre un perso existant 
    2. création de héro
    et donc une page de création avec CRUD bdd associée 
    
-->

<?php

require_once '../utils/autoloader.php';

var_dump("hello") ;

$dicesManager = new DicesManager();
$numberOfRolls = 1;
$numberFaces = 100;
$numberDices = 1;
// $allResultsValid = true;

for ($i = 0; $i < $numberOfRolls; $i++) {
    $result = $dicesManager->dicesRoll($numberDices, $numberFaces);
    echo $result . "<br>";
    // if ($result < 1 || $result > $numberFaces) {
    //     $allResultsValid = false;
    //     echo "Test échoué : résultat $result hors des limites (1-$numberFaces)\n";
    //     break;
    // }
}

// if ($allResultsValid) {
//     echo "Tous les tests ont réussi. La fonction simule correctement un lancer de dé.\n";
// } else {
//     echo "Certains tests ont échoué. La fonction ne simule pas correctement un lancer de dé.\n";
// }


?>

        <script defer src="./assets/scripts/play.js"></script>
