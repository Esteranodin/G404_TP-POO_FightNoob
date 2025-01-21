<?php
// require_once "../../utils/autoloader.php";

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

    public function findHero() {
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

    public function createMonster() {

      $monsters = [
        $this->ragadu,
        $this->frenouille,
        $this->grattapok,
      ];
     
        return $monsters;
    }

    public function findMonster() {
        
    }
}
