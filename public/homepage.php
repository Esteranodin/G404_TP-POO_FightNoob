<?php
require_once "./components/htmlStart.php"

?>

<!-- création ou choix du héro  -->

<body>
    <?php require_once "./components/header.php" ?>

    <main>
        <img id="shield" src="./assets/images/shield.png" alt="Logo du jeu Fight Noob">
        <section id="game-log">
            <ul>
                <li class="title">Que le combat commence !</li>
                <li >Choisis ton perso</li>
                <li >
                <form action="../public/fight.php" method="post"> 
                    <input type="image" name="idHero" value="" src="./assets/images/persoChoiceKnight.jpg" alt="Chevalier">
                </form>   
                </li>

                <script src="./assets/scripts/dragon.js"></script>
            </ul>
        </section>
    </main>
    </div>
    </section>
</body>

<!-- href=""  -->