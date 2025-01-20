<?php
// si lancer de dés alors résultat donne une attaque différente qui eneleve plus ou moins de pv

abstract class Character
{
    // Propriétés

    private string $name;
    private int $health;
    private string $imgPath;

    // Méthode magique

    public function __construct(string $name, int $health, string $imgPath)
    {
        $this->name = $name;
        $this->health = $health;
        $this->imgPath = $imgPath;
    }

    // Geter & Seter

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth($health) : self
    {
            $this->health = $health;

            return $this;
    }

    public function getimgPath(): string
    {
        return $this->imgPath;
    }

    // Méthodes 

    /**
     * Fonction de base pour attaquer pour tous les personnages
     */
    public function hit (Character $target){
        $target->setHealth($target->getHealth() - 15);
}

     
    }

