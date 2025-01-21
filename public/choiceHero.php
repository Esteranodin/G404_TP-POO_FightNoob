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
                                    <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro"></button>
                                <p><?= htmlspecialchars($hero->getName()); ?></p>
                            </li>
                        </form>

                    <?php
                    }
                    ?>
                </div>
            </ul>

        </section>
    </main>
    </section>
</body>

<!-- href=""  -->