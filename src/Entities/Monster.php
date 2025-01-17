<?php

class Monster
{
    // Propriétés
    private string $nameMonster;
    private int $pointsVieMonster;
    private string $imgPathMonster;

    // Méthode magique
   
    public function __construct(string $nameMonster, int $pointsVieMonster,  string $imgPathMonster)
    {
        $this->nameMonster = $nameMonster;
        $this->pointsVieMonster = $pointsVieMonster;
        $this->imgPathMonster = $imgPathMonster;
    }

    // Geter & Seter

    public function getNameMonster()
    {
        return $this->nameMonster;
    }

    public function getPvMonster()
    {
        return $this->pointsVieMonster;
    }

    public function getimgPath()
    {
        return $this->imgPathMonster;
    }


    // Méthodes 

    /**
     * Description méthode
     */


}

?>
