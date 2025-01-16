# POO-Combat-Plus

# 🎯 TP Combat POO : Plongez dans l'Aventure !

Ce TP s'adresse aux apprenants ayant déjà un niveau correct en développement web et sert d'alternative à sa version classique : [POO-Combat](https://github.com/G404-DWWM/POO-Combat).

Ce TP vous donne une base de jeu sur lequel vous allez pouvoir venir ajouter plein de fonctionnalité selon vos envie. 

L'**Objectif** principal est donc d'avancer au maximum sans perdre de temps sur la base du projet, afin de pouvoir développer de votre côté des fonctionnalités custom au cours du temps imparti alloué à ce TP.

## ✨ Objectifs pédagogiques

**🔍 Maîtriser les concepts fondamentaux de la POO :**

- Encapsulation, héritage, polymorphisme.

- Hydratation des objets et gestion via PDO.

- Organisation et structuration du code pour scalabilité et maintenabilité.

**⚙️ Découvrir des outils clés :**

- Auto-loading des classes pour un code modulable.

- Gestion de base de données avec PDO.

**🎮 Créer un jeu de combat épique :**

- Développement d'un jeu tour par tour interactif.

- Intégration d'une interface utilisateur simple mais immersive.

<hr>

## 📂 Organisation du projet

**Fichiers clés**

1. `utils/autoload.php` : Chargement automatique des classes.

2. `src/Entities/Database.php` Connexion PDO Singleton à la base de données (réutiliser le fichier Database de la correction du TP Quiz Refacto Plus).

3. `src/Entities/Hero.php` : Gestion des héros (propriétés, méthodes comme `attack`).

4. `src/Entites/Monster.php` : Gestion des monstres.

5. `src/Repositories/HeroesRepository.php` : CRUD des héros.

6. `src/Managers/FightsManager.php` : Gestion des combats.

7. `public/home.php` : Interface principale pour créer ou choisir un héros.

8. `public/fight.php` : Déroulement graphique d’un combat.

➡️ Ajoutez les autres fichiers necessaire.
Raooel de l'architecture actuelle :

- Si on a besoin de faire des requêtes -> `Repository`.

- Si on a besoin de transformer une donnée brut en Objet ou inversement -> `Mapper`.

- Si on a besoin de gérer et générer un processus complexe -> `Manager`.

- Si vous sentez que vous avez besoin d'inventer un objet allez-y !

<hr>

## 💡Conception 

Avant de commencer à développer, lisez **attentivement** le contenu du TP.

Réalisez ensuite le diagramme relationnel **Entité/Association** !

Pas besoin de maquette, vous réaliserez l'interface au feeling en suivant les étapes du pas à pas. Vous viendrez améliorer cette interface si vous avez le temps !

<hr>

## 🏁 Sprint 1 : Premiers pas dans l’arène

1. **Création de héros** :

Les joueurs peuvent créer un héros avec un nom unique. Le héros est ensuite stocké dans une base de données.

_🖼️ Exemple :_

![Création Héros](./assets/AccueilCreateHero.png)

2. **Sélection d’un héros existant :**
Un joueur peut choisir un héros vivant (HP > 0) pour le combat.

_🖼️ Exemple :_

![Choix Héros](./assets/HeroChoice.png)

3. **Déroulement du combat :**

* Un monstre est automatiquement généré avec des caractéristiques aléatoires.

* Les échanges de coups entre le héros et le monstre sont affichés dynamiquement.

_🖼️ Exemple :_

![Combat](./assets/Fight.png)

4. **Fin du combat :**

* Si le héros survit, il est à nouveau sélectionnable pour d'autres combats.

* En cas de défaite, il reste dans la base pour garder une trace de ses exploits.

<hr>

## 🚀 Étape bonus
**Ajoutez des fonctionnalités fun :**

* 🎲 Dégâts aléatoires (entre 5 et 20).

* Ajoutez d'autres statistique aux héros comme la force, l'endurance, l'agilité... et ce qu'elles impliquent. La force augmente les dégats d'une attaque physique, l'endurance réduit les dégats subit, plus on est agile plus on joue souvent..

* 🛡️ Améliorations pour les héros après une victoire.

* 🧙 Pouvoirs spéciaux pour certains héros ou monstres.

* Combat au tour par tour.

* Animation CSS basé sur des event JS.


## 🏆 Résultats attendus

* Une application fonctionnelle avec une interface simple.

* Des combats dynamiques où chaque tour est affiché.

* Une base de données bien structurée avec des héros et des combats historiques.

## Conseils

N'hésitez pas à faire une pause sur vos fonctionnalités pour regarder votre projet dans son ensemble et voir si vous ne pouvez pas améliorer le code que vous avez déjà fait : 

* Si des fonctionnalités sont complexe, expliquez ce qu'elle fait en **commentaire**.

* Si plusieurs class ont un fonctionnement commun, faite de l'**héritage** avec des classes **abstract**.

* Si plusieurs class répondent au même type de problématique et ont besoin d'un uniformité, utilisez les **interfaces**.

* Si une class n'a pas réellement besoin d'être instanciée ( new QuelqueChose() ), car elle n'a pas de propriétés qui vont "vivre", "évoluer" au cours de l'application, mais prennent plutôt une forme fonctionnelle, passez les en **static**.
