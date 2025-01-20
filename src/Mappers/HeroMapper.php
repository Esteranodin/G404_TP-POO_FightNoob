<?php

class HeroMapper implements MapperContract
{
    public static function mapToObject(array $datasHero): Hero
    {
        return new Hero(  
            $datasHero["id"],
            $datasHero["name"],
            $datasHero["img_path"],
        );
    }

    //beosin de faire une fonciton pour tranformer un objet en tableau ? 
}