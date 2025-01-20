<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

$heroesRepository = new HeroesRepository();
$heroes = $heroesRepository->findAllHeroes();

?>

<!-- création ou choix du héro  -->

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <img id="shield" src="./assets/images/shield.png" alt="Logo du jeu Fight Noob">
        <section id="game-log">

            <ul>
                <li class="title">Choisis ton perso</li>
                <div id="containerCard">
                    <?php foreach ($heroes as $hero) {
                    ?>
                        <form action="./choiceMonstersFight.php" method="post">
                            <li>
                                <input type="hidden" name="idHero" value="<?= htmlspecialchars($hero->getIdHero()); ?>">
                                <button id="cardHeroChoice" type="submit">
                                    <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="Chevalier"></button>
                                    <p><?= htmlspecialchars($hero->getNameHero()); ?></p>
                            </li>
                        </form>

                    <?php
                    }
                    ?>
                </div>
            </ul>

            <!-- <script src="./assets/scripts/dragon.js"></script> -->
        </section>
    </main>
    </div>
    </section>
</body>

<!-- href=""  -->