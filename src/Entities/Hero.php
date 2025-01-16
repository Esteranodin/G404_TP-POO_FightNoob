<?php

class Hero
{
    // Propriétés
    private int $idHero;
    private string $nameHero;
    private int $pointsVieHero;

    // Méthode magique

    public function __construct(int $idHero, string $nameHero)
    {
        $this->idHero = $idHero;
        $this->nameHero = $nameHero;
        // $this->pointsVieHero = $pointsVieHero;
    }

    // Geter & Seter

    public function getIdHero()
    {
        return $this->idHero;
    }

    public function getNameHero()
    {
        return $this->nameHero;
    }


    // Méthodes 

    /**
     * Description méthode
     */

   
}
