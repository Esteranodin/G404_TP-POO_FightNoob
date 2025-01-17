<?php 
require_once "./components/htmlStart.php";

// A SUPPRIMER une fois le require once html start reactivé
// require_once '../utils/autoloader.php';

session_start();
$_SESSION["idHero"] = $_POST;

$monsters = [
    $monster1 = new Monster ("RAGADU", 300, "./assets/images/monster1.png"),
    $monster2 = new Monster ("TAPETEEEE", 300, "./assets/images/monster2.png"),
];

var_dump($_POST);
var_dump($_SESSION);

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
                            <input type="hidden" name="nameMonster" value="<?= htmlspecialchars($monster->getNameMonster()); ?>">
                                <button id="cardMonsterChoice" type="submit">
                                    <img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt=""></button>
                                    <p><?= htmlspecialchars($monster->getNameMonster()); ?></p>
                                </li>
                            </form>
                            
                            <?php
                    }
                    ?>
                </div>
                <li class="title">Que le combat commence !</li>
            </ul>

            <!-- <script src="./assets/scripts/dragon.js"></script> -->
        </section>
    </main>
    </div>
    </section>
</body>

<!-- href=""  -->