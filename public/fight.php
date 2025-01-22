<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();

$fightsManager = new FightsManager();
$monster = $fightsManager->findMonster();
$hero = $_SESSION["hero"];

?>

<script defer src="./assets/scripts/fight.js"></script>

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <h2 class="subtitle">Combat</h2>
        <section class = "game">
            <hr>
            <div class="round">
            <p id="battleHeroMsg"></p>
            <p id="battleMonsterMsg"></p>
        </div>

        <!-- Etat du jeu -->
        <div class="game-state">
            <figure>
                <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro">
                <figcaption><span id="heroHealth"><?= htmlspecialchars($hero->getHealth()); ?> pv </figcaption>
            </figure>
            <button type="button" id="rollDice">fight</button>
         
            <figure>
                <img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt="image du monstre">
                <figcaption><span id="monsterHealth"><?= htmlspecialchars($monster->getHealth()); ?> pv </figcaption>
            </figure>
            
        </div>
        </section>
        
    </main>
</section>

</body>