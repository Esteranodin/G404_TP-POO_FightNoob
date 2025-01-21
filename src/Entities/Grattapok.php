<?php
// cette classe en abstract et chaque type de monstre en classe enfant 

class Grattapok extends Monster
{
   
    public function __construct(string $name = "Grattapok", int $health = 300, string $imgPath = "./assets/images/grattapok.jpg")
    {
        parent::__construct($name, $health, $imgPath);

    }

}

?>
