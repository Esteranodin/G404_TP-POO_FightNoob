<?php


class HeroMapper implements MapperContract
{
    // Méthode statique pour mapper un tableau de données en objet Qcm
    public static function mapToObject(array $heroDatas): Hero
    {
        return new Hero(  
            $heroDatas["id"],
            $heroDatas["name"]
        );
    }
}