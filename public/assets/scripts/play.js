// Mode strict du JavaScript
// 'use strict';

let text = document.querySelectorAll(".game-state").textContent;
let game, hero, monster;



/*********************************************************************************************
 * FONCTIONS POUR LE JEU *********************************************************************************************/

function throwDices(nbr_des, nbr_face) {
	let i,
		somme = 0;
	for (i = 1; i <= nbr_des; i++) {
		somme += getRandomInteger(1, nbr_face);
	}
	return somme;
}

function initializeGame() {
	game = {};
	game.round = 1;

	game.level = 1;
	// game.level = requestInteger("Niveau de difficulté du jeu :\n1:facile\n2:normal\n3:difficile",1,3);

	switch (game.level) {
		case "1":
			game.pvMonster = 100 + throwDices(5, 10);
			game.pvJoueur = 100 + throwDices(10, 10);
			break;
		// case "2":
		// 	game.pvMonster = 100 + throwDices(10, 10);
		// 	game.pvJoueur = 100 + throwDices(10, 10);
		// 	break;
		// case "3":
		// 	game.pvMonster = 100 + throwDices(5, 10);
		// 	game.pvJoueur = 100 + throwDices(7, 10);
		// 	break;
		// default: prompt("erreur de choix");

	}
}

function displayGameState()

{
	document.querySelectorAll(".game-state").textContent ="<li class='game-state'>";

	document.querySelectorAll(".game-state").textContent ="<figure> <img src='images/knight.png' alt='Chevalier'><figcaption> ";

	if(game.pvJoueur <= 0 )

		document.querySelectorAll(".game-state").textContent ="GAME OVER";

	else

	{
		document.querySelectorAll(".game-state").textContent =game.pvJoueur +  " PV";
	}

	document.querySelectorAll(".game-state").textContent ="</figcaption></figure>";

	document.querySelectorAll(".game-state").textContent ="<figure><img src=\"images/monster.png\" alt=\"monster\"><figcaption> ";

	if (game.pvMonster <=0)

	 document.querySelectorAll(".game-state").textContent ="GAME OVER";

	else

	{
		document.querySelectorAll(".game-state").textContent =game.pvMonster + " PV";
	}

	document.querySelectorAll(".game-state").textContent ="</figcaption></figure> </li>";

}


function displayEndGame() {
	if (game.pvMonster <= 0)
		document.querySelectorAll(".game-state").textContent = '<li class="game-end"> <p class="title">Fin de la partie</p> <p>Bravo Vous avez battu  le monster !</p> <img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro"></li>';
	else
		document.querySelectorAll(".game-state").textContent ='<li class="game-end"> <p class="title">Fin de la partie</p> <p>Vous avez perdu le combat, Le monster vous a carbonisé !</p> <img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt="image du monstre"></li>';

}


function Attack() {
	hero = throwDices(10, 6);
	monster = throwDices(10, 6);

	if (monster > hero)
		return "monster";
	else
		return "hero";

}

function monsterDammage() {
	let domagePoint = throwDices(3, 6);


	if (game.level == 1) {
		domagePoint = domagePoint - domagePoint * (Math.round(throwDices(2, 6) / 100));
	}
	if (game.level == 3) {
		domagePoint = domagePoint + domagePoint * (Math.round(throwDices(1, 6) / 100));
	}

	game.pvJoueur -= domagePoint;

	return domagePoint;
}

function heroDammage() {
	let domagePoint = throwDices(3, 6);

	if (game.level == 1) {
		domagePoint = domagePoint + domagePoint * (Math.round(throwDices(2, 6) / 100));
	}
	if (game.level == 3) {
		domagePoint = domagePoint - domagePoint * (Math.round(throwDices(1, 6) / 100));
	}
	game.pvMonster -= domagePoint;

	return domagePoint;
}


function displayRound(attacks, pdomage) {
	if (attacks == "hero") {
		document.querySelectorAll(".game-state").textContent ='<div class="round hero-attacks"><h2 class="subtitle"> Round'
			+ game.round + '</h2><img src="<?= htmlspecialchars($hero->getimgPath()); ?>" alt="image du Héro"><p>Vous êtes le plus rapide, vous attaquez le monstre et lui infligez ' + pdomage + ' points de dommage !</p></div>';
	}
	else {
		document.querySelectorAll(".game-state").textContent ='<div class="round monster-attacks"><h2 class="subtitle"> Round'
			+ game.round + '</h2><img src="<?= htmlspecialchars($monster->getimgPath()); ?>" alt="image du monstre"><p>Le monstre prend l\'initiative, vous attaque et vous inflige ' + pdomage + ' points de dommage !</p> </div>';
	}
}


function loopGame() {
	let dammagePoint;
	let attacker;


	while (game.pvMonster > 0 && game.pvJoueur > 0) {
		attacker = getAttacker();

		if (attacker == "hero") {
			dammagePoint = heroDammage();
		}
		else {
			dammagePoint = monsterDammage();
		}

		displayRound(attacker, dammagePoint);

		displayGameState();

		game.round++;

	}

}


initializeGame();

// displayGameState();

loopGame();

console.log(game);

displayEndGame();


