<?php
// classe en abstract pour faire les types de héros



class Hero extends Character
{

    // Propriétés autre que celles de la classe parent
    private int $idHero;


    // Méthode magique avec toujours le construc du parent

    public function __construct(int $idHero, string $name, int $health, string $imgPath)
    {
        parent::__construct($name, $health, $imgPath);

        $this->idHero = $idHero;
    }

    // Geter & Seter

    public function getIdHero(): int
    {
        return $this->idHero;
    }


    // Méthodes 

    /**
     * Description méthode
     */
}
