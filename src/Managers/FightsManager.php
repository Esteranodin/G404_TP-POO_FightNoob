<?php

// ajouter secu = enfant de securiteManager

final class FightsManager
{
    private HeroesRepository $heroesRepository;
    private monster $ragadu;
    private monster $frenouille;
    private monster $grattapok;


    public function __construct()
    {
        $this->heroesRepository = new HeroesRepository();
        $this->ragadu  = new Ragadu;
        $this->frenouille = new Frenouille;
        $this->grattapok = new Grattapok();
    }

    public function getHeroesRepository(): HeroesRepository
    {
        return $this->heroesRepository;
    }

    public function findHero(): Hero
    {
        if (!isset($_POST["idHero"])) {
            header('Location: ./fight.php?error');
            exit;
        }

        $hero = $this->heroesRepository->findByHeroId($_POST["idHero"]);

        if (!$hero) {
            header('Location: ./fight.php?error=pas de héros choisi');
            exit;
        }

        $_SESSION["hero"] = $hero;

        return $hero;
    }

    public function createMonster(): array
    {
        $monsters = [
            $this->ragadu,
            $this->frenouille,
            $this->grattapok,
        ];

        return $monsters;
    }

    public function findMonster()
    {
        if ($_POST["nameMonster"] === "Ragadu") {
            return $monster = $this->ragadu;
            $_SESSION["monster"] = $monster;
        } else if ($_POST["nameMonster"] === "Frenouille") {
            return $monster = $this->frenouille;
            $_SESSION["monster"] = $monster;
        } else if ($_POST["nameMonster"] === "Grattapok") {
            return $monster = $this->grattapok;
            $_SESSION["monster"] = $monster;
        }
    }

   
}
