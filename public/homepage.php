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
$resultsDices = $dicesManager->resultDices(2, 1, 6);
var_dump($resultsDices);

foreach ($resultsDices as $resultDices) {
    echo $resultDices . "<br>";
}



?>


