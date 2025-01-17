<?php

class FightsManager
{

    private HeroesRepository $heroesRepository;
    // private Monster $monster;


    public function __construct()
    {
        $this->heroesRepository = new HeroesRepository();
        // $this->monster = new Monster();
    }

}
