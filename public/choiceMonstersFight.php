<?php
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

$heroesRepository = new HeroesRepository();
$hero = $heroesRepository->findByHeroId($_POST["idHero"]);

if (!$hero) {
    header('Location: ./fight.php');
    exit;
}

session_start();

$_SESSION["hero"] = $hero;



// faire des objets enfant pour monstre différent
$monsters = [
    $monster1 = new Monster("Ragadu", 300, "./assets/images/monster1.png"),
    $monster2 = new Monster("Tapeteee", 300, "./assets/images/monster2.png"),
];

?>

<!-- création ou choix du héro  -->

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <section id="game-log">

            <ul>
                <li class="title">Qui veux-tu combattre ?</li>
                <div id="containerCard">
                    <?php foreach ($monsters as $monster) {
                    ?>
                        <form action="./fight.php" method="post">
                            <li>
                                <input type="hidden" name="nameMonster" value="<?= htmlspecialchars($monster->getName()); ?>">
                                <button id="cardMonsterChoice" type="submit">
                                    <img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt="image du monstre"></button>
                                <p><?= htmlspecialchars($monster->getName()); ?></p>
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
    </section>
</body>

<!-- href=""  -->