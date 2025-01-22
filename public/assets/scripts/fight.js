document.addEventListener("DOMContentLoaded", function () {

    const fightWithDices = document.querySelector("#rollDice");
    const battleMsgHero = document.querySelector("#battleHeroMsg");
    const battleMonsterMsg = document.querySelector("#battleMonsterMsg");

    const heroHealth = document.querySelector("#heroHealth");
    const monsterHealth = document.querySelector("#monsterHealth");

    fightWithDices.addEventListener("click", handleFight);

    function handleFight() {

        // transforme la vie récup en nombre entier
        const heroHealthToInt = parseInt(heroHealth.textContent);
        const monsterHealthToInt = parseInt(monsterHealth.textContent);

        // à partir de 0 le combat s'arrête
        if (heroHealthToInt <= 0 || monsterHealthToInt <= 0) {

            fightWithDices.removeEventListener("click", handleFight);

            // Affiche un message de victoire ou de défaite
            if (heroHealthToInt <= 0) {
                battleMsgHero.textContent = "Défaite du héros !";
                battleMonsterMsg.textContent = "";
            }

            else if (monsterHealthToInt <= 0) {
                battleMsgHero.textContent = "Victoire du héros !";
                battleMonsterMsg.textContent = "";

            }

            // if (heroHealthToInt <= 0) {
            //     alert("Défaite du héros !");
            // } else if (monsterHealthToInt <= 0) {
            //     alert("Victoire du héros !");
            // }

            return;
        }

        fetch('../process/rollDice.php')
            .then(response => response.json())
            .then(data => {

                // Met à jour la vie du héro en fonction du résultat
                const heroHealth = document.querySelector("#heroHealth");

                let currentHealthHero = heroHealthToInt;
                currentHealthHero -= data.monster.damages;

                //si les PV tombe en dessous de 0 on écrit 0 pour permettre la vérification du premier if
                if (currentHealthHero < 0) {
                    currentHealthHero = 0;
                }

                battleMsgHero.textContent = "Prend " + data.hero.damages + " dégâts dans ta mouille"
                heroHealth.textContent = currentHealthHero + ' pv';

                // Met à jour la vie de l'adversaire en fonction du résultat
                const monsterHealth = document.querySelector("#monsterHealth");

                let currentHealthMonster = monsterHealthToInt;
                currentHealthMonster -= data.hero.damages;

                //si les PV tombe en dessous de 0 on écrit 0 pour permettre la vérification du premier if
                if (currentHealthMonster < 0) {
                    currentHealthMonster = 0;
                }
                battleMonsterMsg.textContent = "Et toi va manger " + data.monster.damages + " dégâts et tes crottes de nez !"
                monsterHealth.textContent = currentHealthMonster + ' pv';

            });

    }
});