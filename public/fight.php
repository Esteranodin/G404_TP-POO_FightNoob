<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];


if( $_POST["nameMonster"] === "Ragadu"){
    $monster = new Monster("Ragadu", 300, "./assets/images/monster1.png");

} else if ($_POST["nameMonster"] === "Tapeteee" ) {
    $monster = new Monster("Tapeteee", 300, "./assets/images/monster2.png");
}

// pour future page si besoin de récup le monstre
$_SESSION["monster"] = $monster;


?>

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <img id="shield" src="./assets/images/shield.png" alt="Logo du jeu Fight Noob">
        <section id="game-log">
            <div>
   <p class="title">Que le combat commence !</p>
   <img src="" alt="image du héro">
            </div>
            <!-- <script src="./assets/scripts/dragon.js"></script> -->
        </section>
    </main>
    </div>
    </section>
</body>