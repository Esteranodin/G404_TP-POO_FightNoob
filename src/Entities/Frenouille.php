<?php
// cette classe en abstract et chaque type de monstre en classe enfant 

class Frenouille extends Monster
{
   
    public function __construct(string $name = "Frenouille", int $health = 300, string $imgPath = "./assets/images/frenouille.png")
    {
        parent::__construct($name, $health, $imgPath);

    }

}

?>
