<?php
require_once "../../utils/autoloader.php";

// ajouter secu = enfant de securiteManager

class FightsManager
{
    private HeroesRepository $heroesRepository;
    // private Monster $monster;


    public function __construct()
    {
        $this->heroesRepository = new HeroesRepository();
        // $this->monster = new Monster();
    }

    // $heroRepository = new HeroRepository();
    // $hero = $heroRepository->find($_POST['hero_id']);
    
    // if (!$hero) {
    //     header('Location: /public/choice-hero.php');
    //     exit;
    // }
    
    // $monster = new Goblin();
    
    // session_start();
    
    // $_SESSION['hero'] = $hero;
    // $_SESSION['monster'] = $monster;


}


