<?php
// cette classe en abstract et chaque type de monstre en classe enfant 

class Monster extends Character
{
   
    public function __construct(string $name, int $health, string $imgPath)
    {
        parent::__construct($name, $health, $imgPath);

    }

}

?>
