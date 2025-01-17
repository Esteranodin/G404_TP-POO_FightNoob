<?php

class Hero
{
    // Propriétés
    private int $idHero;
    private string $nameHero;
    private int $pointsVieHero;
    private string $imgPath;

    // Méthode magique

    public function __construct(int $idHero, string $nameHero, string $imgPath)
    {
        $this->idHero = $idHero;
        $this->nameHero = $nameHero;
        // $this->pointsVieHero = $pointsVieHero;
        $this->imgPath = $imgPath;
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

    public function getimgPath()
    {
        return $this->imgPath;
    }



    // Méthodes 

    /**
     * Description méthode
     */

   
}
