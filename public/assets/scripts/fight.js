document.addEventListener("DOMContentLoaded", function () {

    let fightWithDices = document.querySelector("#rollDice");
    let heroHealth = document.querySelector("#heroHealth");
    let monsterHealth = document.querySelector("#monsterHealth");

    fightWithDices.addEventListener("click", handleFight);

    function handleFight() {

        // transforme la vie récup en nombre entier
        let heroHealthToInt = parseInt(heroHealth.textContent);
        let monsterHealthToInt = parseInt(monsterHealth.textContent);

        // à partir de 0 le combat s'arrête
        if (heroHealthToInt <= 0 || monsterHealthToInt <= 0) {

            fightWithDices.removeEventListener("click", handleFight);
            return;
        }

        fetch('../process/rollDice.php')
            .then(response => response.json())
            .then(data => {

                // Met à jour la vie du héro en fonction du résultat
                const heroHealth = document.querySelector("#heroHealth");

                let currentHealthHero = heroHealthToInt;
                currentHealthHero -= data.damages;

                //si les PV tombe en dessous de 0 on écrit 0 pour permettre la vérification du premier if
                if (currentHealthHero < 0) {
                    currentHealthHero = 0;
                }

                heroHealth.textContent = currentHealthHero + ' pv';

                // Met à jour la vie de l'adversaire en fonction du résultat
                const monsterHealth = document.querySelector("#monsterHealth");

                let currentHealthMonster = monsterHealthToInt;
                currentHealthMonster -= data.damages;

                //si les PV tombe en dessous de 0 on écrit 0 pour permettre la vérification du premier if
                if (currentHealthMonster < 0) {
                    currentHealthMonster = 0;
                }

                monsterHealth.textContent = currentHealthMonster + ' pv';
            });

    }
});