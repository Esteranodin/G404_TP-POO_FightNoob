<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();

$_SESSION["monster"] = $_POST["nameMonster"];

$heroesRepository = new HeroesRepository();
// $heroes = $heroesRepository->findByHeroId();

$monsters = [
    $monster1 = new Monster ("RAGADU", 300, "./assets/images/monster1.png"),
    $monster2 = new Monster ("TAPETEEEE", 300, "./assets/images/monster2.png"),
];

// var_dump($_POST);
// var_dump($_SESSION);

?>

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <img id="shield" src="./assets/images/shield.png" alt="Logo du jeu Fight Noob">
        <section id="game-log">
            <div>
   <p class="title">Que le combat commence !</p>
   <img src="" alt="Chevalier">
            </div>
            <!-- <script src="./assets/scripts/dragon.js"></script> -->
        </section>
    </main>
    </div>
    </section>
</body>