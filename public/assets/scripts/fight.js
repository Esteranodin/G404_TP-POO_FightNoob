let fightWithDices = document.querySelector("#rollDice");
let heroHealth = document.querySelector("#heroHealth");
// let monsterHealth = document.querySelector("#monsterHealth");


fightWithDices.addEventListener("click", handleFight);

function handleFight () {

    if (heroHealth.textContent <= 0 || monsterHealth.textContent <= 0) {

        fightWithDices.removeEventListener("click", handleFight);
        return;
    }

    fetch('../../../process/rollDice.php')
    .then(response => response.json())
    .then(data => {
        // Mettre à jour la vie de l'adversaire en fonction du résultat
        const monsterHealth = document.querySelector("#heroHealth");
        
        let currentHealth = parseInt(monsterHealth.textContent);
        currentHealth -= data.damage;
        monsterHealth.textContent = currentHealth + ' pv';
    });

}