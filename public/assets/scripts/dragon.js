'use strict';   // Mode strict du JavaScript
var game,player, dragon;


/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/

function throwDices(nbr_des,nbr_face)
{
	var i,
	somme = 0;
	for(i=1; i<=nbr_des; i++ )
	{
		somme+= getRandomInteger(1 , nbr_face);
	}
	return somme;
}

function initializeGame()

{
	game = {};
	game.round = 1;

	game.level = requestInteger("Niveau de difficulté du jeu :\n1:facile\n2:normal\n3:difficile",1,3);

	switch(game.level)
	{
		case "1":
		game.pvDragon = 100 + throwDices(5,10);
		game.pvJoueur = 100 + throwDices(10,10);
		break;
		case "2":
		game.pvDragon = 100 + throwDices(10,10);
		game.pvJoueur = 100 + throwDices(10,10);
		break;
		case "3":
		game.pvDragon = 100 + throwDices(5,10);
		game.pvJoueur = 100 + throwDices(7,10);
		break;
		default : prompt("erreur de choix");

	}
}

function displayGameState()

{
	document.write("<li class='game-state'>");
	
	document.write("<figure> <img src='images/knight.png' alt='Chevalier'><figcaption> ");

	if(game.pvJoueur <= 0 )
	
		document.write("GAME OVER");

	else

	{
	document.write(game.pvJoueur +  " PV");
	}
	
	document.write("</figcaption></figure>");

	document.write("<figure><img src=\"images/dragon.png\" alt=\"Dragon\"><figcaption> ");

	if (game.pvDragon <=0)

	 document.write("GAME OVER");
	
	else

	{
	document.write(game.pvDragon + " PV");
	}

	document.write("</figcaption></figure> </li>");
	
	
	
}

function displayEndGame()
{
	if(game.pvDragon <= 0 )
		document.write('<li class="game-end"> <p class="title">Fin de la partie</p> <p>Bravo Vous avez battu  le Dragon !</p> <img src="images/knight-winner.png" alt="joueur"></li>');
	else
		document.write('<li class="game-end"> <p class="title">Fin de la partie</p> <p>Vous avez perdu le combat, Le dragon vous a carbonisé !</p> <img src="images/dragon-winner.png" alt="Dragon"></li>');
	

}


function getAttacker()
{
	player = throwDices(10,6);
	dragon = throwDices(10,6);

	 if(dragon > player) 
	 	return "dragon";
	 else
	 	return "player";

}

function daragonDammage()
{
	var domagePoint =  throwDices(3,6);


	if(game.level == 1)
	{
		domagePoint = domagePoint - domagePoint * (Math.round(throwDices(2,6) / 100));
	}
	if(game.level == 3)
	{
		domagePoint =  domagePoint + domagePoint * (Math.round(throwDices(1,6) / 100));
	}

	game.pvJoueur-= domagePoint;

	return domagePoint;
}

function playerDammage()
{
	var domagePoint = throwDices(3,6) ;

	if(game.level == 1)
	{
		domagePoint = domagePoint + domagePoint * (Math.round(throwDices(2,6) / 100));
	}
	if(game.level == 3)
	{
		domagePoint = domagePoint - domagePoint * (Math.round(throwDices(1,6) / 100));
	}
	game.pvDragon-=domagePoint;

	return domagePoint;
}


function displayRound(attacks,pdomage)
{
	if(attacks == "player")
	{
	  document.write('<li class="round-log player-attacks"><h2 class="subtitle">'+'Tour n°'+game.round+'</h2><img src="images/knight-winner.png" alt="Chevalier"><p>Vous êtes le plus rapide, vous attaquez le dragon et lui infligez '+pdomage+' points de dommage !</p></li>');
	}
	else 
	{
	  document.write('<li class="round-log dragon-attacks"><h2 class="subtitle">Tour n°'+game.round+'</h2> <img src="images/dragon-winner.png" alt="Dragon"><p>Le dragon prend l\'initiative, vous attaque et vous inflige '+pdomage+' points de dommage !</p> </li>');
	}
}


function loopGame()
{
	var dammagePoint;
	var attacker;


	while(game.pvDragon >0 && game.pvJoueur > 0)
	{
		attacker =  getAttacker();

		if(attacker == "player" )
		{
			dammagePoint = playerDammage();
		}
		else
		{
			dammagePoint= daragonDammage();
		}

		displayRound(attacker,dammagePoint);

		displayGameState();
		
		game.round++;

	}


	

}
	
	 	
	
 
	 	




/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/



initializeGame();

displayGameState();

loopGame();
console.log(game);
displayEndGame();


