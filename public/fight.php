<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();

$fightsManager = new FightsManager();
$monster = $fightsManager->findMonster();
$hero = $_SESSION["hero"];



?>

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <section>
            <h2 class="subtitle">Round 1</h2>
            <hr>
            <div class="round">
            <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro">
            <p>Vous êtes le plus rapide, vous attaquez et infligez 11 points de dommage au monstre !</p>
        </div>

        <!-- Etat du jeu -->
        <div class="game-state">
            <figure>
                <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro">
                <figcaption>124 pv</figcaption>
            </figure>
            <h2>vs</h2>
            <figure>
                <img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt="image du monstre">
                <figcaption>124 pv</figcaption>
            </figure>
            
        </div>
        </section>
        <!-- 
        Journal de la partie - TOUR N°2 -->
        <!-- <li class="round player-attacks">
            <h2 class="subtitle">Tour n°2</h2>
            <img src="images/knight-winner.png" alt="Chevalier">
            <p>Vous êtes le plus rapide, vous attaquez le dragon et lui infligez 8 points de dommage !</p>
        </li> -->

        <!-- Etat du jeu -->
        <!-- <li class="game-state">
            <figure>
                <img src="images/knight-wounded.png" alt="Chevalier">
                <figcaption>7 PV</figcaption>
            </figure>
            <figure>
                <img src="images/dragon-wounded.png" alt="Dragon">
                <figcaption>25 PV</figcaption>
            </figure>
        </li> -->

        <!-- Journal de la partie - TOUR N°34 -->
        <!-- <li class="round player-attacks">
            <h2 class="subtitle">Tour n°34</h2>
            <img src="images/knight-winner.png" alt="Chevalier">
            <p>Vous êtes le plus rapide, vous attaquez le dragon et lui infligez 14 points de dommage !</p>
        </li> -->

        <!-- Etat du jeu -->
        <!-- <li class="game-state">
            <figure>
                <img src="images/knight-wounded.png" alt="Chevalier">
                <figcaption>7 PV</figcaption>
            </figure>
            <figure>
                <img src="images/dragon-wounded.png" alt="Dragon">
                <figcaption>11 PV</figcaption>
            </figure>
        </li> -->

        <!-- Journal de la partie - TOUR N°35 -->
        <!-- <li class="round dragon-attacks">
            <h2 class="subtitle">Tour n°35</h2>
            <img src="images/dragon-winner.png" alt="Dragon">
            <p>Le dragon prend l'initiative, vous attaque et vous inflige 8 points de dommage !</p>
        </li> -->

        <!-- Etat du jeu -->
        <!-- <li class="game-end">
            <p class="title">Fin de la partie</p>
            <p>Vous avez perdu le combat, le dragon vous a carbonisé !</p>
            <img src="images/dragon-winner.png" alt="Dragon">
        </li> -->


    </main>
</section>

</body>