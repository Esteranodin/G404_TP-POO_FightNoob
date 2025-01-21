<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];


if ($_POST["nameMonster"] === "Ragadu") {
    $monster = new Monster("Ragadu", 300, "./assets/images/monster1.png");
} else if ($_POST["nameMonster"] === "Tapeteee") {
    $monster = new Monster("Tapeteee", 300, "./assets/images/monster2.png");
}

// pour future page si besoin de récup le monstre
$_SESSION["monster"] = $monster;


?>

<body>
    <?php require_once "./components/header.php" ?>

    <main>
            <script src="./assets/scripts/dragon.js"></script>

        <div class="round player-attacks">
            <h2 class="subtitle">Round 1</h2>
            <hr>
            <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro">
            <p>Vous êtes le plus rapide, vous attaquez et infligez 11 points de dommage au monstre !</p>
        </div>

        <!-- Etat du jeu -->
        <!-- <li class="game-state">
            <figure>
                <img src="images/knight.png" alt="Chevalier">
                <figcaption>124 PV</figcaption>
            </figure>
            <figure>
                <img src="images/dragon.png" alt="Dragon">
                <figcaption>124 PV</figcaption>
            </figure>
        </li> -->
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


        </section>
    </main>

</body>