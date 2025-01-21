<?php
// cette classe en abstract et chaque type de monstre en classe enfant 

class Ragadu extends Monster
{
   
    public function __construct(string $name = "Ragadu", int $health = 200, string $imgPath = "./assets/images/radagu.png")
    {
        parent::__construct($name, $health, $imgPath);

    }

}

?>
